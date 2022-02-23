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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for the toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
    alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         @include('dashboard.components.sidebar')
        <!-- End of Sidebar -->
        {!! Toastr::message() !!}
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('dashboard.components.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Reservation</h1>

                    </div>

                    <br>
                    <h5><i class="far fa-envelope"></i>&nbsp;|&nbsp;Make Reservation</h5>

                    <hr>

                    <br>
                    {!! Form::open(['route' => 'dashboard.make-reservation.create', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label class="col-md-3 control-label" for="name"  required="required" hidden  >Name</label>
                        <div class="col-md-9">

                            <input class="form-control" id="name" name="name"  value="{{ Auth::user()->name }}" type="text" hidden>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 control-label" for="name"  required="required" >Item (1 item per transaction)</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder="Select Item" id="Name_item" name="Name_item"  data-toggle="modal" data-target="#demoModal" type="text">
                        </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-3 control-label" for="quantity"  required="required">Quantity</label>
                      <div class="col-md-9">
                      <input type="text" class="form-control" name="quantity_item" placeholder="Quantity" required>
                      </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 control-label" for="email">Date & Time </label>
						<div class="col-md-9">
                            <input class="form-control" id="currentDateTime" type="datetime-local" name="dt_item" >
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 control-label" for="name"  required>Room</label>
                        <div class="col-md-9">
                            <select class="form-control" id="room_item" name="room_item" required="required" style="width: 100%" placeholder="Select items to borrow">
                                <option value="" disabled selected hidden>Select room</option>
                                @foreach ($room as $roomname )
                                <option value="{{ $roomname->e_roomname }} ">{{ $roomname->e_roomname }}</option>
                             @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 control-label" for="email">Date Returned </label>
						<div class="col-md-9">
                            <input class="form-control" id="ldate_item" type="datetime-local" name="ldate_item" >
						</div>
                    </div>


                    <br>

                    <div class="makereservation">
                    <button type="submit" class="btn btn-primary btn-md pull-right" value="Save/Insert Data">Make Reservation</button>
                    </div>

                </form>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('dashboard.components.footer')
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

    <div class="modal fade bd-example-modal-lg" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Select Equipment</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body"><div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Equipment List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                                <table class="table table-bordered table-hover table-sm" id="example" width="100%" cellspacing="0" data-href="https://www.google.com/">
                                    <thead>
                                        <tr>
                                            <th hidden>ID</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Brand</th>
                                            <th>Type</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                         </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($item as $items)

                                        <tr>
                                            <td hidden>{{ $items->id }}</td>
                                            <td>{{ $items->e_category }}</td>
                                            <td><img src="{{ asset('storage/public/e_img/'.$items->e_image) }}" alt="Image" width="70px" height="70px"></td>
                                            <td>{{ $items->e_model }}</td>
                                            <td>{{ $items->e_brand }}</td>
                                            <td>{{ $items->e_quantity }}</td>
                                            <td class="e_status">{{ $items->e_status }}</td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>


        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
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

       <!-- <script type="text/javascript">
            var today = new Date();
            var date = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + " " + today.getSeconds();
            var dateTime = date+' '+time;
            document.getElementById("currentDateTime").value = dateTime;
        </script>-->
        <!-- borrow equipment-->
        <script type="text/javascript">
        var table= $('#example').DataTable();
        var tableBody = '#example tbody';

        $(tableBody).on('click', 'tr', function () {
        var cursor = table.row($(this));//get the clicked row
        var data=cursor.data();// this will give you the data in the current row.

        $('form').find("input[name='Name_item'][type='text']").val(data[4]);
        $('#demoModal').modal('hide');
        } );

        </script>

        <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
        </script>

        <script>
            flatpickr("input[type=date"),{});
        </script>

</body>

</html>




