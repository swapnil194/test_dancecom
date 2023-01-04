<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuSettingsController;
use App\Http\Controllers\Admin\AuthController;

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('optimize:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('welcome');
});

   Route::name("admin.")->prefix("admin")->group(function ($router) {
    //admin_login
    // Default Route
    Route::get('/',[AuthController::class,'login'])->name('admin');
    Route::get('/login-send-otp/{id}',[AuthController::class,'login_send_otp'])->name('login-send-otp');
    Route::post('/verify_otp',[AuthController::class,'verify_otp'])->name('verify_otp');
    Route::get('/resendOtp/{id}',[AuthController::class,'resendOtp'])->name('resendOtp');
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('check_login',[AuthController::class,'checkLogin'])->name('check_login');
   
    Route::post('updateLanguage',[AuthController::class,'updateLanguage'])->name('updateLanguage');
    Route::group(['middleware' => ['AdminAuthenticate']],function(){

    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    Route::post('updatePassword',[AuthController::class,'updatePassword'])->name('updatePassword');
    
    //admin dashboard
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    //menus-settings
    Route::resource('menus-settings',MenuSettingsController::class);
    Route::get('menus_settings/getRecords',[MenuSettingsController::class,'getRecords']);
  }); //Middleware AdminAuthenticate end
}); //route admin prefix end


