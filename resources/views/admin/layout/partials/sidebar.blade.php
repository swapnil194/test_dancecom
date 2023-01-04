<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
      <img src="{{ asset('assets/admin/images/default-image.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">@lang('admin.TITLE_SITE_BEGIN')@lang('admin.TITLE_SITE_END')</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'menu-open' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               @lang('admin.TITLE_DASHBOARD')
              </p>
            </a>
          </li>

          <li class="nav-item {{ request()->routeIs('admin.menus-settings*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                @lang('admin.TITLE_MENU_SETTING_TEXT')
                @lang('admin.TITLE_MANAGE_TEXT') 
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="{{ url('admin/menus-settings/create') }}" class="nav-link {{ request()->is('admin/menus-settings/create') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>@lang('admin.TITLE_MENU_SETTING_TEXT')
                    @lang('admin.TITLE_ADD_BUTTON') </p>
                 </a>
              </li>

              <li class="nav-item">
                 <a href="{{ url('admin/menus-settings') }}" class="nav-link {{ request()->is('admin/menus-settings') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>@lang('admin.TITLE_MENU_SETTING_TEXT')
                    @lang('admin.TITLE_VIEW_BUTTON') </p> 
                 </a>
              </li>
            </ul>
          </li>

        <!--   <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
            </ul>
          </li>
         -->

         <!--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li> -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $moduleAction??''}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">@lang('admin.TITLE_SITE_HOME')</a></li>
            <li class="breadcrumb-item active">{{ $moduleAction??''}}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>