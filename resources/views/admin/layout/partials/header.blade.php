<!DOCTYPE html>
<html>
<head>
  <?php Header('Location: '.$_SERVER['PHP_SELF']);?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | @lang('admin.TITLE_SITE_BEGIN')@lang('admin.TITLE_SITE_END')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="admin-path" content="{{ url('/admin') }}">
  <meta name="base-path" content="{{ url('/') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
   <!-- flag-icon-css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/summernote/summernote-bs4.css') }}"> 
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('assets/admin-lte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/plugins/sweetalert/sweetalert.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="{{ asset('assets/admin/images/default-image.png')}}" width="30px" class="user-image" alt="User Image"> 
          @if(Auth::check())
          <span>{{ ucwords(auth()->user()->first_name ?? "") }} {{ ucwords(auth()->user()->last_name?? "") }} </span>
          @endif
        </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="#"  class="dropdown-item"><i class="fas fa-lock mr-2"></i> @lang('admin.TITLE_CHANGE_PASSWORD_MODULE')</a>
            <a href="{{ route('admin.logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i> @lang('admin.TITLE_BUTTON_LOGOUT')</a>
          </div>
      </li>

      <!-- Language Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="flag-icon @if(app()->getlocale()=='en') flag-icon-us @else flag-icon-de @endif"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0" >
              <a href="javascript:void(0)" class="dropdown-item @if(app()->getlocale()=='en') active activeLanguage @endif" lang="@if(app()->getlocale()=='en') en @endif" onclick="updateLanguage('en')">
                <i class="flag-icon flag-icon-us mr-2"></i> English 
              </a>
              <a href="javascript:void(0)" class="dropdown-item @if(app()->getlocale()=='de') active activeLanguage @endif" lang="@if(app()->getlocale()=='de') de @endif" onclick="updateLanguage('de')">
                <i class="flag-icon flag-icon-de mr-2"></i> German
              </a>
            </div>
          </li>
   </ul>
</nav>
<!-- /.navbar -->