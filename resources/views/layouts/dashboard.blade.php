<!DOCTYPE html>
<html lang="en">

<head>

      @include('includes.dashboard.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
         @include('includes.dashboard.sideMenu')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('includes.dashboard.topBar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                     </div>

                     @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            @include('includes.dashboard.footer')

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>    
    

    <!-- Bootstrap core JavaScript-->
    <script src="assets_dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="assets_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets_dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets_dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets_dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets_dashboard/js/demo/chart-area-demo.js"></script>
    <script src="assets_dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>