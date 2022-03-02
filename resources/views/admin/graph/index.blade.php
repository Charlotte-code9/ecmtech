

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
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    
<script>
window.onload = function() {
// Equipment Inventory
var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2", 
	animationEnabled: true,
    exportEnabled: true,
	title: {
		text: "Equipment Inventory"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: {{ $c1_count }}, label: "Computer Device"},
			{y: {{ $c2_count }}, label: "Sports"},
			{y: {{ $c3_count }}, label: "Learning Modules"},
			{y: {{ $c4_count }}, label: "Faculty Staffs"},
		
		]
	}]
});

//Borrowed and Returned


var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
    exportEnabled: true,
	title:{
		text: "Classified Monthly Borrower"
	},	
	axisY: {
		title: "Faculty",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Students",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
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
		name: "Faculty",
		legendText: "Faculty",
		showInLegend: true, 
		dataPoints:[
			{ label: "Jan", y: {{ $janf }} },
			{ label: "Feb", y: {{ $febf }} },
			{ label: "Mar", y: {{ $marf }} },
			{ label: "Apr", y: {{ $aprf }} },
			{ label: "May", y: {{ $mayf }} },
			{ label: "Jun", y: {{ $junf }} },
            { label: "Jul", y: {{ $julf }} },
            { label: "Aug", y: {{ $augf }} },
            { label: "Sep", y: {{ $sepf }} },
            { label: "Oct", y: {{ $octf }} },
            { label: "Nov", y: {{ $novf }} },
            { label: "Dec", y: {{ $decf }} },
		]
	},
	{
		type: "column",	
		name: "Students",
		legendText: "Students",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
			{ label: "Jan", y: {{ $jans }} },
			{ label: "Feb", y: {{ $febs }} },
			{ label: "Mar", y: {{ $mars }} },
			{ label: "Apr", y: {{ $aprs }} },
			{ label: "May", y: {{ $mays }} },
			{ label: "Jun", y: {{ $juns }} },
            { label: "Jul", y: {{ $juls }} },
            { label: "Aug", y: {{ $augs }} },
            { label: "Sep", y: {{ $seps }} },
            { label: "Oct", y: {{ $octs }} },
            { label: "Nov", y: {{ $novs }} },
            { label: "Dec", y: {{ $decs }} },
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
	chart3.render();
}

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


chart.render();

chart3.render();
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
                    <div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4 breadcrumb">
                        <h1 class="h5 mb-0 text-gray-800"><span><a href="{{route('admin.home')}}" class="fas fa-home"></a> &nbsp;/ Graph </span></h1>

                    </div>
                        <!--/.row-->

				<hr>
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    <hr>
                    <div id="chartContainer3" style="height: 300px; width: 100%;"></div>
                     <hr>
                    <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                    






                     <!-- End for Table for Borrower -->

                </div>
                 <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->
        </div>
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





    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>

	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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

     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>




</body>

</html>



