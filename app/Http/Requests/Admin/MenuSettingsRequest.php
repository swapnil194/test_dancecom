<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MenuSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() 
    {
        $id = base64_decode(base64_decode($this->route('menus_setting'))) ?? null;   
            return [
                'name'     => 'required',
                'url'      => 'required',
            ];
    }

    public function messages()
    {
        return [
            'name.required'   =>  __('admin.ERR_MENU_NAME_REQUIRED'),
            'url.required'    =>  __('admin.ERR_MENU_URL_REQUIRED'),    
        ];
    }
}
