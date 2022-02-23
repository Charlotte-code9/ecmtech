
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <style>
    *{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}

nav{
  background: #187bcd;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
 
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 15px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section{
  background: url(bg1.jpg) no-repeat;
  background-size: cover;
  height: calc(100vh - 80px);
}
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

           <!-- Sidebar -->
                @include('dashboard.components.sidebar')
                <!-- End of Topbar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('dashboard.components.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4 breadcrumb">
                            <h1 class="h5 mb-0 text-gray-800"><span><a href="{{route('dashboard.home')}}" class="fas fa-home"></a> &nbsp; Equipment</span></h1>
                        </div>
                    </div>
                    
                    <div class="row">
    	            <nav>
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label>
                    <label class="logo">Category</label>
                    <ul class="nav nav-pills">
                        <li class="active"><a class="active" href="#pending" data-toggle="tab">Computer Device</a></li>
                        <li><a href="#reserved" data-toggle="tab">Sports</a></li>
                        <li><a href="#" data-toggle="tab">Learning Modules</a></li>
                        <li><a href="#" data-toggle="tab">Faculty Staffs</a></li>
                    </ul>
                    </nav>
               </div>
                 
                    <!--<ul class="nav justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="#pending" data-toggle="tab">Computer Device</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Learning Modules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reserved" data-toggle="tab">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reserved" data-toggle="tab">Faculty Staffs</a>
                    </li>
                    </ul>-->


  
                 
                    

                   <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="pending">
                                        <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">Computer Devices</h6>
                                                </div>
                                            <div class="card-body">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered tbl_pendingres display" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th hidden>ID</th>
                                                            <th>Category</th>
                                                            <th>Image</th>
                                                            <th>Brand</th>
                                                            <th>Item Name</th>
                                                            <th>Available Qty</th>
                                                            <th>Status</th>
                                                         </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($eqp as $invdata)

                                                        <tr>
                                                            <td hidden>{{ $invdata->id }}</td>
                                                            <td>{{ $invdata->e_category }}</td>
                                                            <td><img src="{{ asset('storage/public/e_img/'.$invdata->e_image) }}" alt="Image" width="70px" height="70px"></td>
                                                            <td>{{ $invdata->e_model }}</td>
                                                            <td>{{ $invdata->e_brand }}</td>
                                                            <td>{{ $invdata->e_quantity }}</td>
                                                            <td>{{ $invdata->e_status }}</td>
                                                        </tr>

                                                        @endforeach
                                                    </tbody>
                                                </table>


                                            </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="reserved">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">Sports</h6>
                                                </div>
                                            <div class="card-body">

                                            <div class="table-responsive">
                                                <table class="table table-bordered tbl_acceptres display" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th hidden>ID</th>
                                                            <th>Category</th>
                                                            <th>Image</th>
                                                            <th>Brand</th>
                                                            <th>Item Name</th>
                                                            <th>Available Qty</th>
                                                            <th>Status</th>
                                                          
                                                         </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($eqs as $eqsdata)

                                                        <tr>
                                                            <td hidden>{{ $eqsdata->id }}</td>
                                                            <td>{{ $eqsdata->e_category }}</td>
                                                            <td><img src="{{ asset('storage/public/e_img/'.$eqsdata->e_image) }}" alt="Image" width="70px" height="70px"></td>
                                                            <td>{{ $eqsdata->e_model }}</td>
                                                            <td>{{ $eqsdata->e_brand }}</td>
                                                            <td>{{ $eqsdata->e_quantity }}</td>
                                                            
                                                            <td>{{ $eqsdata->e_status }}</td>
                                                        </tr>

                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                     <!-- End for Table for Borrower -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script type="text/javascript" src="/media/js/site.js?_=7f3ff05b95c2da3db6d895b5bf6d6487"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fbasic_init%2Fmultiple_tables.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
	<script type="text/javascript" class="init">

    <script src="{{ asset ('-admin/js/newjs.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
</body>

</html>




