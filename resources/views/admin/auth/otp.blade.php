@extends('admin.layout.web')
@section('title')
{{ $moduleTitle ?? 'Log In' }}
@endsection
@section('content')
<div class="card">
   <div class="card-body login-card-body">
      <form id='loginForm' method="post" action="{{ route('admin.verify_otp')}}" data-toggle="validator">
         {{ csrf_field() }}
         <input type="hidden" name="user_id" id="user_id" value="{{$user_id}}">
         <div class="form-group  has-feedback">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span> 
            <div class="input-group mb-1">
               <input type="text" 
                  class="form-control" 
                  name="otp" 
                  placeholder="SMS Code hier eingeben" 
                  required
                  data-error="@lang('admin.AUTH_OTP_REQ')">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
            </div>
            <span class="help-block invalid-feedback with-errors">
               <ul class="list-unstyled">
                  <li class="err_otp" ></li>
               </ul>
            </span>
         </div>
         <div class="row">
            <!-- /.col -->
            <div class="col-6">
               <button type="submit" id="btnLogin" value="Login" class="btn btn-primary btn-block btn-flat">@lang('admin.TITLE_BUTTON_LOGIN')</button>
            </div>
            <div class="col-6">
               <a href="javascript:void(0)" id="resendOTP" onclick="resendOTP('{{$user_id}}')">@lang('admin.TITLE_RESEND_OTP')</a>
            </div>
            <!-- /.col -->
         </div>
      </form>
      <!-- /.social-auth-links -->
   </div>
</div>
<!-- /.login-box-body -->
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/admin/js/auth/otp.js') }}"></script>
<script type="text/javascript">
   var URL =  '{{url("/admin/dashboard/")}}';
   const ResendURL = "{{ url('admin/resendOtp',$user_id) }}";
</script>
@endsection