
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BSIT DEPARTMENT</title>
    <link rel ="icon" href="{{ asset('-admin/img/ctu.png')}}" type="image/x-icon">
     <!-- Custom styles for this page -->
     <link href="{{ asset('-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('-admin/css/login.css') }}" rel="stylesheet">
 <!-- Custom styles for the modal -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
 integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      @include('admin.components.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.components.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4 breadcrumb">
                        <h1 class="h5 mb-0 text-gray-800"><span><a href="{{route('admin.home')}}" class="fas fa-home"></a> &nbsp;/ Co-Admin List </span></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i
                            class="fas fa-download fa-sm text-white-50"></i> Add User</a>
                    </div>

                    </div>

                    <br>

                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Copy</button>
                        <button type="button" class="btn btn-primary">PDF</button>
                        <button type="button" class="btn btn-primary">Print</button>
                    </div>
                    <!-- Table for Borrower -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th hidden>Id</th>
                                            <th>Name</th>
                                            <th></th>
                                         </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td hidden> </td>
                                            <td> </td>

                                            <td>
                                                <button class="btn btn-success btn-sm" title="Edit"  data-toggle="modal" data-target="#editModal">&nbsp;<i class="fas fa-edit" style="cursor: pointer"></i>&nbsp;</button>&nbsp;&nbsp;
                                                <button class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#deleteModal" >&nbsp;<i class="fas fa-trash-alt" ></i>&nbsp;</button>&nbsp;&nbsp;
                                                <button class="btn btn-primary btn-sm" title="More Information" ><i class="fas fa-search" ></i></button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End for Table for Borrower -->
                </div>

             </div>
            <!-- End of Main Content -->

        <!-- Footer -->
         @include('admin.components.footer')
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        @include('admin.useradmin.createmodal')
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
                    <a class="btn btn-primary" href="{{route('logout')}}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
                {{ csrf_field() }}
                </form>

                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('-admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('-admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('-admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('-admin/js/demo/chart-pie-demo.js') }}"></script>

       <!-- Page level plugins -->
       <script src="{{ asset('-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
       <script src="{{ asset('-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

       <!-- Page level custom scripts -->
       <script src="{{ asset('-admin/js/demo/datatables-demo.js') }}"></script>

</body>

</html>



