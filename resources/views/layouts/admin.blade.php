<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

<<<<<<< HEAD
    @include('includes.style')
=======
    <!-- Custom fonts for this template-->
 @include('includes.style')
>>>>>>> 773b545298c35d15b7c4ff4b6867b9624f5a8990

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
<<<<<<< HEAD
       @include('includes.sidebar')
        <!-- End of Sidebar -->
        @yield('content')
=======
   @include('includes.sidebar')
        <!-- End of Sidebar -->

>>>>>>> 773b545298c35d15b7c4ff4b6867b9624f5a8990
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<<<<<<< HEAD
                @include('includes.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
            
=======
          @include('includes.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
         @yield('content')
         @yield('tabel')
>>>>>>> 773b545298c35d15b7c4ff4b6867b9624f5a8990
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
<<<<<<< HEAD
            @include('includes.footer')
=======
       @include('includes.footer')
>>>>>>> 773b545298c35d15b7c4ff4b6867b9624f5a8990
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Bootstrap core JavaScript-->
    @include('includes.script')
=======
  @include('includes.script')
>>>>>>> 773b545298c35d15b7c4ff4b6867b9624f5a8990

</body>

</html>