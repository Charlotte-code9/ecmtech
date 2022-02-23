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

    <title>ECM-TECH</title>
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      @include('admin.components.sidebar')
        <!-- End of Sidebar -->
        {!! Toastr::message() !!}
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
                            <h1 class="h5 mb-0 text-gray-800"><span><a href="{{ route('admin.home') }}" class="fas fa-home"></a> &nbsp;/ Add Equipment </span></h1>
                            <div class="col-12 col-xl-auto ">
                                <a class="btn btn-sm btn-light text-primary" href="{{ route ('admin.equipment.index')}}">
                                    <i class="fas fa-arrow-left" data-feather="arrow-left"></i>
                                    Back to Equipment List
                                </a>
                            </div>
                        </div>


                            @if (session('success'))
                            <div class="alert alert-success alert-dismissal fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                                <Strong> Success !</Strong> {{ session('success')}}
                            </div>

                            @endif

                            @if (session('destroy'))
                            <div class="alert alert-success alert-dismissal fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                                <Strong> Success !</Strong> {{ session('destroy')}}
                            </div>

                            @endif


                    <!-- VALIDATION ERRORS OUTPUT -->

                    <!-- Add Equipment -->
                    <br><br>

                    <div>
                        <div class="row">
                            <div class="col-xl-4">

                                <!-- Profile picture card-->
                                <div class="card shadow mb-4">
                                    {!! Form::open(['route' => 'admin.equipment.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}

                                      {{  csrf_field() }}
                                    <div class="card-header m-0 font-weight-bold text-primary">Equipment Image</div>
                                    <div class="card-body text-center">
                                        <input type="file" name="e_image" id="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card shadow mb-10">
                                    <div class="card-header m-0 font-weight-bold text-primary">Equipment Details</div>
                                    <div class="card-body shadow">
                                        <form>
                                            <!-- Form Row-->
                                            <div class="row gx-6 mb-6">
                                                <!-- Form Group (model)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">Model</label>
                                                    <input class="form-control" id="e_model" type="text" placeholder="Enter model" value="" required/>
                                                </div>
                                                <!-- Form Group (category)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLastName">Category</label>
                                                    <input class="form-control" id="e_category" type="text" placeholder="Enter category" value="" required/>
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (brand)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">Brand</label>
                                                    <input class="form-control" id="e_brand" type="text" placeholder="Enter brand" value="" required/>
                                                </div>
                                                <!-- Form Group (quantity)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">Quantity</label>
                                                    <input class="form-control" id="e_quantity" type="text" placeholder="Enter quantity" value="" required/>
                                                </div>

                                            </div>
                                            <!-- Form Group (Roles)-->
                                            <div class="mb-3">
                                                <label>Status</label>
                                                <select class="form-control" name="e_status" id="e_status" value="{{old('e_status')}}" required>
                                                  <option selected disabled>Select Status</option>
                                                  <option value="New">New</option>
                                                  <option value="Old">Old</option>
                                                   <option value="Old">Lost</option>
                                                </select>

                                            </div>
                                            <!-- Submit button-->
                                            <button type="submit" name="submit" class="btn btn-primary" value="Save/Insert Data">Add</button>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
             </div>

            <!-- End of Main Content -->

        <!-- Footer -->
         @include('admin.components.footer')
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

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

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

</body>
</html>


</body>

</html>

