<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{env('APP_NAME', 'Laravel')}} | {{isset($title)?$title:''}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::to('backend')}}/assets/images/favicon.ico">
    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{URL::to('backend')}}/assets/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="{{URL::to('backend')}}/assets/vendor/jquery-toast-plugin/jquery.toast.min.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{URL::to('backend')}}/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme Config Js -->
    <script src="{{URL::to('backend')}}/assets/js/hyper-config.js"></script>
    <!-- App css -->
    <link href="{{URL::to('backend')}}/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons css -->
    <link href="{{URL::to('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('backend')}}/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('backend')}}/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('backend')}}/assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('backend')}}/assets/css/custom.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/fc-3.3.1/fh-3.1.7/r-2.2.5/sc-2.0.2/datatables.min.css"/>
    @yield('css')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
        @include('layouts.navbar')
        <!-- ========== Left Sidebar End ========== -->
        <div class="content-page">
           @yield('content')
           <!-- Footer Start -->
           <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> © {{env('APP_NAME', 'Laravel')}} - theLaraSoft.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
</div>
<!-- END wrapper -->

<!-- Theme Settings -->
@include('layouts.theme-settings')       

<!-- Vendor js -->
<script src="{{URL::to('backend')}}/assets/js/vendor.min.js"></script>
<!-- Daterangepicker js -->
<script src="{{URL::to('backend')}}/assets/vendor/daterangepicker/moment.min.js"></script>
<script src="{{URL::to('backend')}}/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!-- Apex Charts js -->
<script src="{{URL::to('backend')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
<!-- Vector Map js -->
<script src="{{URL::to('backend')}}/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{URL::to('backend')}}/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- Dashboard App js -->
<script src="{{URL::to('backend')}}/assets/js/pages/demo.dashboard.js"></script>


<!-- App js -->
<script src="{{URL::to('backend')}}/assets/js/app.js"></script>
<script src="{{URL::to('backend')}}/assets/vendor/jquery-toast-plugin/jquery.toast.min.js"></script>

<!-- Datatables js -->
<script src="{{URL::to('backend')}}/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('backend')}}/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{URL::to('backend')}}/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{URL::to('backend')}}/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

<!--  Select2 Js -->
<script src="{{URL::to('backend')}}/assets/vendor/select2/js/select2.min.js"></script>
<script src="{{URL::to('backend')}}/assets/js/sweetalert.min.js"></script>

<!-- datatable-exportable CDN -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/fc-3.3.1/fh-3.1.7/r-2.2.5/sc-2.0.2/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>

@yield('javascript')
<script !src>
    !(function (c) {
        "use strict";
        function t() {}
        (t.prototype.send = function (t, o, i, e, n, a, s, r) {
            t = { heading: t, text: o, position: i, loaderBg: e, icon: n, hideAfter: (a = a || 3e3), stack: (s = s || 1) };
            (t.showHideTransition = r || "fade"), c.toast().reset("all"), c.toast(t);
        }),
        (c.NotificationApp = new t()),
        (c.NotificationApp.Constructor = t),
        
        @if(Session::has('message'))
        c.NotificationApp.send("{{ ucfirst(Session::get('alert-type')) }}","{{ Session::get('message') }}","top-right","rgba(0,0,0,0.2)","{{ Session::get('alert-type') }}");
        @elseif(count($errors) > 0)
        @foreach($errors->all() as $error)
        c.NotificationApp.send("Error","{{$error }}","top-right","rgba(0,0,0,0.2)","error");
        @endforeach
        @endif

        $(".select2-tags").select2({
          tags: true
      });

        $(".select2").select2();

    })(window.jQuery);

    function notify(message,type) {
        swal({
            icon: type,
            text: message,
            button: false
        });
        setTimeout(()=>{
            swal.close();
        }, 1500);
    }

    $(document).ready(function() {
        var datatable_file_name = $('.datatable-exportable').attr('data-table-name');
        var table = $('.datatable-exportable').DataTable({
            lengthMenu: [
                [ 5,10, 25, 50, 100, -1 ],
                [ '5 rows', '10 rows', '25 rows', '50 rows', '100 rows', 'Show all' ]
                ],

            language: {
              emptyTable: "No data available right now"
          },

          iDisplayLength: -1,

            // sScrollX: "100%",

          sScrollXInner: "100%",
          scrollCollapse: true,

          paging: false,
            //ordering: false,
          info: false,

          dom: 'Bfrtip',
          buttons: [
                // 'pageLength',
          {
            extend: 'copy',
            title: datatable_file_name
        },
        {
            extend: 'print',
            title: datatable_file_name
        },
        {
            extend: 'csv',
            filename: datatable_file_name
        },
        {
            extend: 'excel',
            filename: datatable_file_name
        },
        {
            extend: 'pdf',
            filename: datatable_file_name
        },
        {
            extend: 'colvis',
            collectionLayout: 'fixed four-column',
            attr:  {
                id: 'ColumnsButton'
            },
        }
        ],

          "columnDefs": [{
            "targets": <?php echo json_encode(userColumnVisibilities()); ?>,
            "visible": false
        }]
      });
        
        $('.buttons-collection').addClass('btn-sm');
        $('.buttons-copy').removeClass('btn-secondary').addClass('btn-sm btn-warning').html('<i class="mdi mdi-content-copy"></i>').attr('title', "Copy");
        $('.buttons-csv').removeClass('btn-secondary').addClass('btn-sm btn-success').html('<i class="mdi mdi-google-spreadsheet"></i>').attr('title', "CSV");
        $('.buttons-excel').removeClass('btn-secondary').addClass('btn-sm btn-primary').html('<i class="mdi mdi-microsoft-excel"></i>').attr('title', "Excel");
        $('.buttons-pdf').removeClass('btn-secondary').addClass('btn-sm btn-dark').html('<i class="mdi mdi-file-pdf-box"></i>').attr('title', "PDF");
        $('.buttons-print').removeClass('btn-secondary').addClass('btn-sm btn-dark').html('<i class="mdi mdi-printer"></i>').attr('title', "Print");
        $('.buttons-colvis').addClass('btn-sm').html('<i class="mdi mdi-database-eye"></i>').attr('title', "Column Visibility");

        $('.datatable-exportable').parent().addClass('table-responsive');

        $('.datatable-exportable').on( 'column-visibility.dt', function (e, settings, column, state){
            var columns = [];
            $.each($('.buttons-columnVisibility'), function(index, val) {
                columns.push($(this).hasClass('active'));
            });

            $.ajax({
                url: "{{ url('admin/update-user-column-visibilities') }}",
                type: 'POST',
                data: {"_token": "{{ csrf_token() }}",url: location.href, columns: columns},
            });
        });

        $('.word-restrictions').on("keyup change", function(e) {
            var restrictions = "{{ implode(',', wordRestrictions()) }}".split(',');
            var input = $(this);
            $.each(restrictions, function(index, restriction) {
                input.val(input.val().replace(new RegExp(restriction, "ig"), ''));
            });
        });

        // $(document).on('select2:open', function(e) {
        //   document.querySelector(`[aria-controls="select2-${e.target.id}-results"]`).focus();
        // });
    });
</script>
</body>
</html> 