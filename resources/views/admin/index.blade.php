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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

     <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    	window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
		theme: "light2", // "light1", "light2", "dark1", "dark2"
		exportEnabled: true,
		animationEnabled: true,
		title: {
			text: "Equipment Inventory"
		},
		data: [{
			type: "pie",
			startAngle: 25,
			toolTipContent: "<b>{label}</b>: {y}%",
			showInLegend: "true",
			legendText: "{label}",
			indexLabelFontSize: 14,
			indexLabel: "{label} - {y}%",
			dataPoints: [
				{ y: {{ $c1_count}}, label: "Computer Hardware" },
				{ y: {{ $c2_count}}, label: "Learning Modules" },
				{ y: {{ $c3_count}}, label: "Sports" },
				{ y: {{ $c4_count}}, label: "Faculty Staffs" },
				
			]
		}]
		
	});
    chart.render();

   // Item Analysis
var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
    exportEnabled: true,
	title:{
		text: "Monthly Borrowed, Return and Lost Items Analysis"
	},	
	axisY: {
		
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
	
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},
    axisY3: {
		
		titleFontColor: "yellow",
		lineColor: "yellow",
		labelFontColor: "yellow",
		tickColor: "yellow"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Borrowed",
		legendText: "Borrowed",
		showInLegend: true, 
		dataPoints:[
			{ label: "Jan", y: {{ $janb }} },
			{ label: "Feb", y: {{ $febb }} },
			{ label: "Mar", y: {{ $marb }} },
			{ label: "Apr", y: {{ $aprb }} },
			{ label: "May", y: {{ $mayb }} },
			{ label: "Jun", y: {{ $junb }} },
            { label: "Jul", y: {{ $julb }} },
            { label: "Aug", y: {{ $augb }} },
            { label: "Sep", y: {{ $sepb }} },
            { label: "Oct", y: {{ $octb }} },
            { label: "Nov", y: {{ $novb }} },
            { label: "Dec", y: {{ $decb }} },
		]
	},
    {
		type: "column",
		name: "Lost",
		legendText: "Lost",
		showInLegend: true, 
		dataPoints:[
			{ label: "Jan", y: {{ $janl }} },
			{ label: "Feb", y: {{ $febl }} },
			{ label: "Mar", y: {{ $marl }} },
			{ label: "Apr", y: {{ $aprl }} },
			{ label: "May", y: {{ $mayl }} },
			{ label: "Jun", y: {{ $junl }} },
            { label: "Jul", y: {{ $jull }} },
            { label: "Aug", y: {{ $augl }} },
            { label: "Sep", y: {{ $sepl }} },
            { label: "Oct", y: {{ $octl }} },
            { label: "Nov", y: {{ $novl }} },
            { label: "Dec", y: {{ $decl }} },
		]
	},
	{
		type: "column",	
		name: "Return",
		legendText: "Return",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
			{ label: "Jan", y: {{ $janr }} },
			{ label: "Feb", y: {{ $febr }} },
			{ label: "Mar", y: {{ $marr }} },
			{ label: "Apr", y: {{ $aprr }} },
			{ label: "May", y: {{ $mayr }} },
			{ label: "Jun", y: {{ $junr }} },
            { label: "Jul", y: {{ $julr }} },
            { label: "Aug", y: {{ $augr }} },
            { label: "Sep", y: {{ $sepr }} },
            { label: "Oct", y: {{ $octr }} },
            { label: "Nov", y: {{ $novr }} },
            { label: "Dec", y: {{ $decr }} },
		]
	}]
});



function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart4.render();
}
chart4.render();
}

</script>



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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Inventory Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                            <a href="{{ route('admin.inventory.index')}}" style=" color:inherit;">Inventory</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Equipment Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                <a href="{{ route('admin.borroweditems.index')}}" style=" color:inherit;">Borrowed Items</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-desktop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Equipment Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-info text-uppercase mb-1">
                                                <a href="{{ route('admin.returneditems.index')}}" style=" color:inherit;">Returned Items</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-desktop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reservations Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                                <a href="{{ route('admin.reservations.index')}}" style=" color:inherit;">Reservations</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                      <div id="chartContainer4" style="width: 100%; height: 100%;display: inline-block;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt- pb-">
                                   <div id="chartContainer" style="width: 100%; height: 100%;display: inline-block;"></div>
                                </div>
                                <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            
                                        </span>
                                        <span class="mr-2">
                                            
                                        </span>
                                        <span class="mr-2">
                                            
                                        </span>
                                         
                                    </div>
                            </div>
                        </div>
                    </div>
               </div>
            


                
                 <!-- Content Row -->
                 <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        

                    </div>
                </div>



                </div>
                <!-- End Page Content -->

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


    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
    <script src="{{ asset('-admin/js/demo/pie.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</body>

</html>



