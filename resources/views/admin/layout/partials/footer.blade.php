
</div>
<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>@lang('admin.TITLE_SITE_COPYRIGHT') &copy; 2019-{{ date("Y",time()) }} <a href="{{ url('/admin') }}">@lang('admin.TITLE_SITE_BEGIN')@lang('admin.TITLE_SITE_END')</a>.</strong> @lang('admin.TITLE_SITE_RIGHTS')
  </footer>
  <?php 
    $is_updated = '1';
  ?>
</div>

@section('models') 
@include('admin.users.change-password-model')
@show


<!-- ./wrapper -->
<script>
  var is_updated = '{{$is_updated}}';
  if(is_updated == "0")
  {
    $("#changePasswordfrm").click();
    $('#changePasswordfrm').modal({backdrop: 'static', keyboard: false});  
  }
</script>
<!-- jQuery -->
<script src="{{ asset('assets/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/admin-lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin-lte/plugins/sparklines/sparkline.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/admin-lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/admin-lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin-lte/plugins/daterangepicker/daterangepicker.js') }}"></script> 
<!-- datepicker -->
<script src="{{ asset('assets/admin-lte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('assets/admin-lte/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin-lte/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('assets/common/js/validator.min.js') }}"></script>
<script src="{{ asset('assets/plugins/lodingoverlay/loadingoverlay.min.js') }}"></script>
<script src="{{ asset('assets/plugins/axios/axios.min.js') }}"></script>
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/plugins/toastr/toastr.options.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert/sweetalert.js') }}"></script>
<script src="{{ asset('assets/admin/js/users/model.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/input-mask/mask.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/admin/css/jquery-ui.css') }}">  
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery-ui.js') }}"></script>  
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery.ui.datepicker-de.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  const ADMINURL = $('meta[name="admin-path"]').attr('content');
  const BASEURL = $('meta[name="base-path"]').attr('content');
  const CSRFTOKEN = document.querySelector("meta[name=csrf-token]").content
  axios.defaults.headers.common['X-CSRF-Token'] = CSRFTOKEN; 
  var deleteContent = {};
  deleteContent.title = "{{ __('admin.TITLE_DELETE_SURE') }}";
  deleteContent.text  = "{{ __('admin.TITLE_DELETE_QUESTION') }}";
  deleteContent.other_text  = "{{ __('admin.TITLE_OTHER_TEXT') }}";
  deleteContent.confirm = "{{ __('admin.TITLE_DELETE_BUTTON') }}";
  deleteContent.other_confirm = "{{ __('admin.TITLE_OK_BUTTON') }}";
  deleteContent.cancel = "{{ __('admin.TITLE_CANCEL_BUTTON') }}";
  var ON = "{{ __('admin.TITLE_ON') }}"; 
  var OFF = "{{ __('admin.TITLE_OFF') }}";
  var PAGE_SHOW = "{{ __('admin.TITLE_PAGE_SHOW') }}"; 
  var PAGE_TO = "{{ __('admin.TITLE_PAGE_TO') }}";
  var PAGE_OF = "{{ __('admin.TITLE_PAGE_OF') }}";
  var Confirm = "@lang('admin.TITLE_WARNING_CONFIRM')";
  var Warning_msg = "@lang('admin.TITLE_WARNING_MSG')";
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
<script src="{{ asset('assets/admin-lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
@yield('scripts')
</body>
</html>
