<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admins/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/admins/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/admins/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/admins/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admins/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/admins/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/admins/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/admins/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/admins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admins/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admins/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/admins/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Lihat Semua</a>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="#" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Jualan Madu</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/admin-madu" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin-product" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin-review" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Review</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin-admin" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-ellipsis-h"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <?= $this->renderSection('content_admin'); ?>


        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; RWM 2022.</strong>
            <strong><a href="https://adminlte.io">Template By</a></strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/admins/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/admins/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 4 -->
    <script src="assets/admins/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="assets/admins/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/admins/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="assets/admins/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/admins/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/admins/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="assets/admins/plugins/moment/moment.min.js"></script>
    <script src="assets/admins/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/admins/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="assets/admins/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/admins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/admins/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="assets/admins/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/admins/dist/js/pages/dashboard.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/admins/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/admins/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/admins/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/admins/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/admins/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/admins/plugins/jszip/jszip.min.js"></script>
    <script src="assets/admins/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/admins/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/admins/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/admins/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/admins/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>