       
<!-- jQuery -->
<script src="{{asset('admin-static/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin-static/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin-static/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('admin-static/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('admin-static/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('admin-static/vendors/plupload.full.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('admin-static/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('admin-static/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin-static/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('admin-static/vendors/skycons/skycons.js')}}"></script>
<script src="{{asset('admin-static/vendors/vue.js')}}"></script>
<!-- Flot -->
<script src="{{asset('admin-static/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin-static/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin-static/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin-static/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin-static/vendors/Flot/jquery.flot.resize.js')}}"></script>



<!-- Flot plugins -->
<script src="{{asset('admin-static/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('admin-static/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('admin-static/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('admin-static/vendors/DateJS/build/date.js')}}"></script>
<script src="{{asset('admin-static/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

<script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" ></script>

<!-- JQVMap -->
<script src="{{asset('admin-static/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('admin-static/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('admin-static/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('admin-static/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin-static/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('admin-static/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>



<!-- Custom Theme Scripts -->
<script src="{{asset('admin-static/js/custom.min.js')}}"></script>
<script src="{{asset('admin-static/js/admin.js')}}"></script>

<script>
    $.ajaxSetup( {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('scripts')