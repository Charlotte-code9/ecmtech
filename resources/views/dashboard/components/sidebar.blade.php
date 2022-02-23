<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.home')}}">
        <div class="sidebar-brand-icon ">
            <i class=""><img src="{{ asset('-admin/img/ecmtechlogo.png')}}" width="50px"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ECM-TECH </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard.home')}}">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

   <!-- Nav Item - Equipment -->
   <li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard.equipment.index') }}">
        <i class="fas fa-desktop"></i>
        <span>Equipment</span></a>
   </li>

     <!-- Nav Item - Make Reservation -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.make-reservation.index') }}">
            <i class="fas fa-tasks"></i>
            <span>Make Reservation</span></a>
    </li>


    <!-- Nav Item - Equipment -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.reservationstatus.index') }}">
            <i class="far fa-calendar-check"></i>
            <span>Reservation Status</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
