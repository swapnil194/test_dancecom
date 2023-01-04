@extends('admin.layout.web')
@section('title')
{{ $moduleTitle ?? 'Log In' }}
@endsection
@section('content')
<div class="card">
   <div class="card-body login-card-body">
      <p class="login-box-msg">@lang('admin.TITLE_LOGIN_HEADING')</p>
      <form id='loginForm' method="post" action="{{ route('admin.check_login')}}" data-toggle="validator">
         {{ csrf_field() }}
         
         <div class="form-group  has-feedback">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span> 
            <div class="input-group mb-1">
               <input type="text" 
                  class="form-control" 
                  name="email" 
                  placeholder="@lang('admin.TITLE_EMAIL')" 
                  value="{{ $user->email ?? '' }}"
                  required
                  data-error="@lang('admin.ERR_EMAIL_REQUIRED')">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
            </div>
            <span class="help-block invalid-feedback with-errors">
               <ul class="list-unstyled">
                  <li class="err_email" ></li>
               </ul>
            </span>
         </div>

         <div class="form-group has-feedback">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>  
            <div class="input-group mb-1">
               <input type="password" 
                  class="form-control" 
                  name="password" 
                  placeholder="@lang('admin.TITLE_PASSWORD')" 
                  value="{{ $user->password ?? '' }}"
                  required
                  data-error="@lang('admin.ERR_LOGIN_PASSWORD_REQUIRED')">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>

            <span class="help-block invalid-feedback with-errors">
               <ul class="list-unstyled">
                  <li class="err_password" ></li>
               </ul>
            </span>
         </div>
         
         <div class="row">
            <div class="col-4">
               <div class="form-group has-feedback">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span> 
                  <div class="input-group mb-1">
                     <div class="select-editable">
                        <select 
                           class="form-control my-select"
                           name="country_code"
                           id="country_code"
                           onchange="this.nextElementSibling.value=this.value">
                           <option value="+43">+43</option>
                           <option value="+91">+91</option>
                           <option value="0043">0043</option>
                           <option value="0">0</option>
                        </select>
                        <input  
                           type="text" 
                           name="format"
                           id="format"  
                           class="form-control"
                           placeholder="@lang('admin.TITLE_PATIENT_COUNTRY_CODE')"   
                           required
                           value='+43'
                           maxlength="5" 
                           pattern="(\+[0-9]+|0[0-9]+|00[0-9]+)"
                            data-error="@lang('admin.ERR_COUNTRY_CODE_REQUIRED')"
                           data-pattern-error ="@lang('admin.ERR_COUNTRY_CODE_WRONG')">
                     </div>
                     <span class="help-block invalid-feedback with-errors" >
                        <ul class="list-unstyled">
                           <li class="err_format"></li>
                        </ul>
                     </span>
                  </div>
                  <span class="help-block invalid-feedback with-errors">
                     <ul class="list-unstyled">
                        <li class="err_country_code" ></li>
                     </ul>
                  </span>
               </div>
            </div>
            <!-- /.col -->
            <div class="col-8">
               <div class="form-group has-feedback">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>  
                  <div class="input-group mb-1">
                     <input type="text" 
                        class="form-control" 
                        name="phone" 
                        placeholder="@lang('admin.TITLE_MOBILE_NO')" 
                        value="{{ $user->mobile_number ?? '' }}"
                        required
                        data-error="@lang('admin.ERR_MOBILE_NUMBER_REQUIRED')" 
                        >
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fa fa-mobile"></span>
                        </div>
                     </div>
                  </div>
                  <span class="help-block invalid-feedback with-errors">
                     <ul class="list-unstyled">
                        <li class="err_phone" ></li>
                     </ul>
                  </span>
               </div>
            </div>
            <!-- /.col -->
         </div>
         <div class="form-group">
            <select 
               name="language" 
               id="language" 
               required
               data-error="@lang('admin.ERR_LANGUAGE_REQUIRED')"
               class="form-control">
               <option value="">@lang('admin.TITLE_SELECT_LANGUAGE')</option>
               <option value="de" @if(app()->getlocale()=='de') selected @endif>@lang('admin.TITLE_LANGUAGE_GERMAN')</option>
               <option value="en" @if(app()->getlocale()=='en') selected @endif>@lang('admin.TITLE_LANGUAGE_ENGLISH')</option>
            </select>
            <span class="help-block invalid-feedback with-errors">
               <ul class="list-unstyled">
                  <li class="err_language"></li>
               </ul>
            </span>
         </div>
        
         <div class="row">
            <div class="col-8">
               <a href="#">@lang('admin.TITLE_FORGOT_PASSWORD')</a><br>
            </div>
            <!-- /.col -->
            <div class="col-4">
               <button type="submit" id="btnLogin" value="Login" class="btn btn-primary btn-block btn-flat">@lang('admin.TITLE_BUTTON_LOGIN')</button>
            </div>
            <!-- /.col -->
         </div>
      </form>
   </div>
</div>
<!-- /.login-box-body -->
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/admin/js/auth/login.js') }}"></script>
@endsection