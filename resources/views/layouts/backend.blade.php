<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @yield('css_before')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.backend-css')
    @yield('css_after')

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="mdi mdi-close"></i>
            </button>

            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center">

                    <a href="{{ asset('backend') }}/index.html" class="logo"><img
                            src="{{ asset('backend') }}/images/logo_dark.png" height="20" alt="logo"></a>
                </div>
            </div>

            @include('layouts/backend-sidebar')
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <div class="content">
                @include('layouts.backend-navbar')
                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                        @yield('content')
                    </div>
                </div>
            </div>


            <footer class="footer">
                © 2022 <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i>
                    MS Technology.</span>
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    {{-- @yield('js_before')
    @extends('layouts.backend-js')
    @yield('js_after') --}}
    <!-- jQuery  -->
    <script src="{{ asset('backend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/js/modernizr.min.js"></script>
    <script src="{{ asset('backend') }}/js/detect.js"></script>
    <script src="{{ asset('backend') }}/js/fastclick.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.blockUI.js"></script>
    <script src="{{ asset('backend') }}/js/waves.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.nicescroll.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.scrollTo.min.js"></script>

    <!--Morris Chart-->
    <script src="{{ asset('plugins') }}/morris/morris.min.js"></script>
    <script src="{{ asset('plugins') }}/raphael/raphael.min.js"></script>

    <!-- dashboard js -->
    {{-- <script src="{{ asset('backend') }}/pages/dashboard.int.js"></script> --}}

    <!-- App js -->
    <script src="{{ asset('backend') }}/js/app.js"></script>

    <!-- Responsive-table-->
    {{-- <script src="{{ asset('plugins') }}/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script> --}}

    <!-- App js -->
    {{-- <script src="{{ asset('backend') }}/js/app.js"></script> --}}
    {{--
    <script>
        $(function() {
            $('.table-responsive').responsiveTable({
                addDisplayAllBtn: 'btn btn-secondary'
            });
        });
    </script> --}}

    <!-- Required datatable js -->
    <script src="{{ asset('plugins') }}/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('plugins') }}/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="../plugins/sweet-alert2/sweetalert2.min.js"></script>

    <!-- Datatable init js -->
    {{-- <script src="{{ asset('backend') }}/pages/datatables.init.js"></script> --}}

    @yield('js')
</body>

</html>
