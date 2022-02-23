
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT DEPARTMENT</title>
    <link rel ="icon" href="{{ asset('-admin/img/ctu.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('-admin/css/finaldashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('-admin/css/sb-admin-2.css') }}">

    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>

<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a class="logo"> BSIT DEPARTMENT </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#/about">about</a>
        <a href="{{ route('dashboard.equipment.index') }}">equipment</a>
        <a href="{{ route('dashboard.reservationstatus.index') }}">reservation status</a>

    </nav>
    <div class="dropdown">
  <button class="btn "type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <h3> <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }} </span>
                <img class="img-profile rounded-circle"
                    src="{{asset('-admin/img/undraw_profile.svg')}}" width="30px" height="30px"></h3>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a href="{{ route('dashboard.user-profile.index')}}" class="btn"> <h3><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i></i> Profile</h3></a>
    <a href="" class="btn" data-toggle="modal" data-target="#demoModal"> <h3><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</h3></a>
  </div>
</div>
            
   
   

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>EQUIPMENT MONITORING SYSTEM</h3>
            <a href="{{ route('dashboard.make-reservation.index') }}" class="btn btn-primary">Make Reservation</a>
        </div>

        <div class="image">
            <img src="{{ asset('-admin/img/ctu.png')}}" class="main-home-image" alt="">
        </div>

    </div>

    <div class="image-slider">
        <img src="image/home-img-1.png" alt="">
        <img src="image/home-img-2.png" alt="">
        <img src="image/home-img-3.png" alt="">
    </div>

    <!-- Modal Example Start-->
    <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-
    labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Ready to Leave?</h2>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><h4>Select "Logout" below if you are ready to end your current session.</h4></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal"><h3>Cancel</h3></button>
                <a class="btn btn-primary" href="{{route('logout')}}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <h3>Logout</h3>
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
            {{ csrf_field() }}
            </form>

            </div>
        </div>
    </div>
    </div>
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="/about">

    <h1 class="heading"> about us </h1>

    <div class="row">

        <div class="image">
            <img src="{{ asset ('-admin/img/ctu-ecmtech.jpg')}}" alt="">
        </div>

        <div class="content">
            <h3 class="title">why is this system preferential?</h3>
            <p>Developers started ECM-TECH (Efficient Control and Monitoring-Technology) because of the rampant issues on manual equipment reservation in CTU-Daanbantayan Campus, specifucally on the Bachelor of Science in Information Technology (BSIT) Department.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="{{ asset ('-admin/img/note.png')}}" alt="">
                    <h3>Noteworthy</h3>
                </div>
                <div class="icons">
                    <img src="{{ asset ('-admin/img/responsive.png')}}" alt="">
                    <h3>Responsive</h3>
                </div>
                <div class="icons">
                    <img src="{{ asset ('-admin/img/customary.png')}}" alt="">
                    <h3>Customary</h3>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- about section ends -->
<script src="{{ asset('-admin/js/userd.js')}}"></script>



























<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
