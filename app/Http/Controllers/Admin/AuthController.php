<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Support\Facades\Lang;
use App\Models\AdminUserModel;

//Request
use App\Http\Requests\Admin\UserUpdatePasswordRequest;

use App;
use DB;
use Hash;
use Cookie;
use Carbon\Carbon;
use Config;
use Auth;
use Validator;
use Session;

class AuthController extends Controller
{
    public function __construct(
        AdminUserModel $AdminUserModel
    )
    {
        $this->BaseModel = $AdminUserModel; 
        $this->ViewData = [];
        $this->JsonData = [];
        $this->ModuleView  = 'admin.auth.';
        $this->ModulePath = 'admin.auth.';   
        $this->rememberTitle = 'LARAVEL_RSESSION'; 
    }

    public function login(Request $request)
    {
       // App::setLocale('de');
        if(auth()->user())
        {
            return redirect()->route('admin.dashboard');
        } 
        $this->ViewData['moduleTitle']  = __('admin.TITLE_LOGIN_MODULE');
        $this->ViewData['moduleAction'] = __('admin.TITLE_LOGIN_MODULE');
        $this->ViewData['modulePath']   = $this->ModulePath.'login';
        return view($this->ModuleView.'login', $this->ViewData);
    }

    public function checkLogin(LoginRequest $request,$enCompanyId=false)
    {   
        $this->JsonData['status'] = __('admin.RESP_ERROR');
        $this->JsonData['msg']    = __('admin.ERR_ACCOUNT_INCORRECT'); 
        $language = 'en';
        if(!empty($request->language))
        {
            $language = $request->language;
        }
        $mobile_no = str_replace(" ", "", $request->phone);
        $mobile_no = ltrim($mobile_no,0);
        $getUsersDetails = $this->BaseModel
       ->where('email',$request->email)
       ->where('mobile_number',$mobile_no)
       ->where('country_code',$request->format)
       ->first();
        session::put('country_code_sess',$request->format); 

        $user_data = array(
        'email'  => $request->email,
        'password' => $request->password
        );    

        if(!empty($getUsersDetails))
        {
            //if (Hash::check($request->password, $getUsersDetails->password))
            if(Auth::attempt($user_data))
            {
                $mobile_no = str_replace(" ", "", $request->phone);
                $mobile_no = ltrim($mobile_no,0);
                $collection = $this->_updateOtp($getUsersDetails,$request->format);
                //dd($request->remember_me); 
                setcookie ("email",$request->email,time()+ 3600);
                setcookie ("password",$request->password,time()+ 3600);
                setcookie ("mobile_no",$request->phone,time()+ 3600);
                // 
                $getUsersDetails->str_password = $request->password;
                $getUsersDetails->save();
                session::put('language',$language);
                // 
                $user_id = base64_encode(base64_encode($getUsersDetails->id));
                $this->JsonData['url']    = url('admin/login-send-otp/'.$user_id);
                $this->JsonData['status'] = __('admin.RESP_SUCCESS');
                $this->JsonData['msg']    = __('admin.ACCOUNT_SUCCESS');
            }
            else
            {
                $this->JsonData['status'] = __('admin.RESP_ERROR');
                $this->JsonData['msg'] = __('admin.ERR_ACCOUNT_PASSWORD_WRONG');
            }
        }
        else
        {
            $this->JsonData['status'] = __('admin.RESP_ERROR');
            $this->JsonData['msg']    = __('admin.ERR_ACCOUNT_EMAIL_MOBILE');
        }
        //dd($this->JsonData);
        return response()->json($this->JsonData);exit;           
    }

    public function login_send_otp($enID)
    {
        //App::setLocale('de');
        $id = base64_decode(base64_decode($enID));
        $this->ViewData['moduleTitle']  = __('admin.TITLE_LOGIN_MODULE');
        $this->ViewData['moduleAction'] = __('admin.TITLE_LOGIN_MODULE');
        $this->ViewData['modulePath']   = $this->ModulePath.'login';
        $this->ViewData['user_id']   = $id;
        return view($this->ModuleView.'otp', $this->ViewData);  
    }

    public function verify_otp(Request $request)
    {
        $errors = [];
        $data = [];
        $message = __('api.AUTH_INVALID_OTP');
        $status = false;
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'otp' => 'required|numeric',
            ],
            [
              'user_id.required' => __('api.AUTH_PATIENT_ID_REQ'),
              'otp.required' => __('api.AUTH_OTP_REQ'),     
            ]);
        if($validator->fails()) 
        {     
          $errors[] = $validator->errors();
        }
        else
        {
            $data = [];
            $collection = $this->BaseModel->find($request->user_id);
            if(!empty($collection))
            {
                $start = date('Y-m-d H:i:s', strtotime($collection->otp_created_at));
                $start = new Carbon($start); 
                $end =  new Carbon(date('Y-m-d H:i:s', time()));
                $diffInMinutes = $start->diffInMinutes($end); 
                if(!empty($collection))
                {
                    if($collection->login_otp==$request->otp)
                    {
                        session::put('is_updated',$collection->is_updated);
                        // check for valid username 
                        $credentials = [];
                        $credentials['email']         = $collection->email;
                        $credentials['password']      = $collection->str_password;
                        $remember_me = !empty($request->remember) ? true : false;
                        $language = 'en';
                        $getlanguage = session::get('language');
                        if(!empty($getlanguage)){
                            $language = $getlanguage;
                        }

                        if (auth()->guard('admin')->attempt($credentials, $remember_me)) 
                        {
                            $user = $this->BaseModel->where('email',$credentials['email'])->first();
                            session(['locale' => $language]);
                            //Set Lanuguage                        
                            $updatePass = $this->BaseModel->find($user->id);
                            $updatePass->str_password = null;
                            $updatePass->save();
                            session::put('country_code_sess',''); 
                            $this->JsonData['url'] = url('admin/dashboard');
                            $this->JsonData['status'] = __('admin.RESP_SUCCESS');
                            $this->JsonData['msg'] = __('admin.ACCOUNT_SUCCESS');
                        }
                        else
                        {
                            $this->JsonData['status'] = __('admin.RESP_ERROR');
                            $this->JsonData['msg'] = __('admin.ERR_ACCOUNT_DEACTIVATE');
                        }          
                    }
                    else
                    {
                        $this->JsonData['status'] = __('admin.RESP_ERROR');
                        $this->JsonData['msg'] = __('admin.AUTH_FAILED_OTP');
                    }
                }
            }
        }
        return response()->json($this->JsonData);exit;           
    }

    public function resendOtp($user_id)
    {   
        $flag = 0;
        $collection = $this->BaseModel->find($user_id);                 
        if(!empty($collection))
        {
            $country_code = session::get('country_code_sess'); 
            $collection = $this->_updateOtp($collection,$country_code);
            $flag = 1;
        }
        else
        {
            $flag = 0;
        }
        return $flag = 1;           
    }

    public function _updateOtp($collection,$code)
    {
        if(!empty($collection))
        {
            $otp_code = rand(1000, 9999);       
            //update otp for the patient and send sms to the patient
            $password  = Hash::make($otp_code);
            $updateQry = DB::table('users')
            ->where('id', $collection->id)
            ->update([
                'login_otp' => $otp_code,
                'otp_created_at' => date('Y-m-d H:i:s')
            ]);
            $country_code = $collection->country_code;
            if(!empty($country_code))
            {
                $country_code = str_replace("00", "",$code);
            }elseif(empty($country_code) || $country_code=='0')
            {
                $country_code = '43'; //Austria country code
            }
            $country_code = str_replace("+", "",$country_code);
            $phone   = $country_code."".str_replace("-", "",$collection->mobile_number);
            $message = 'Hallo '.$collection->family_name.', lhr Login-Code für die PUREGYN-App lautet '.$otp_code.'. Er ist 5 Minuten gültig.';
            $collection->login_otp = $otp_code;
            $collection->message = $message;
        }
        return $collection; 
    }

    public function logout()
    {
        //auth()->guard('admin')->logout();
        auth()->logout();
        return redirect()->route('admin.login');
    }

    public function updateLanguage(Request $request)
    {
        $this->JsonData['status'] = __('admin.RESP_ERROR');
        $this->JsonData['msg'] = __('admin.FAIL_LANGUAGE_STATUS');
        $lang = 'de';
        if(!empty($request->lang))
        {
            $lang = $request->lang;
        }
       Session(['locale' => $lang]);//Set Lanuguage
       $this->JsonData['status'] = __('admin.RESP_SUCCESS');
       $this->JsonData['msg'] = __('admin.CHANGE_LANGUAGE_STATUS');
       return response()->json($this->JsonData);
    }

    public function updatePassword(UserUpdatePasswordRequest $request)
    {
        $new_pasword = $request->password;
        if (!empty($new_pasword)) 
        {
            $collection = $this->BaseModel
            ->where('id', auth()->user()->id)
            ->where('email', auth()->user()->email)
            ->first();
            if (!empty($collection)) 
            {
                if (Hash::check($request->old_password, $collection->password))        
                {
                    $collection->password       = Hash::make($new_pasword);
                    $collection->is_updated   = '1';
                    if($collection->save())
                    {   
                        Session::put('is_updated','1');
                        $this->JsonData['status'] = __('admin.RESP_SUCCESS');
                        $this->JsonData['msg'] = __('admin.CHANGE_PASSWORD_STATUS');
                        $this->JsonData['url'] = url('admin/dashboard');
                    }
                    else
                    {
                        $this->JsonData['status'] = __('admin.RESP_ERROR');
                        $this->JsonData['msg'] = __('admin.FAIL_CHANGE_PASSWORD_STATUS');
                    }
                }
                else
                {
                    $this->JsonData['status'] = __('admin.RESP_ERROR');
                    $this->JsonData['msg'] = __('admin.FAIL_CHANGE_PASSWORD_MATCH');
                }
            }
            else
            {
                $this->JsonData['status'] = __('admin.RESP_ERROR');
                $this->JsonData['msg'] = __('admin.ERR_SESSION_TIMEOUT');
            }
        }
        else
        {
            $this->JsonData['status'] = __('admin.RESP_ERROR');
            $this->JsonData['msg'] = __('admin.ERR_CHANGE_PASSWORD_NEW');
        }
        return response()->json($this->JsonData);
    }
}
