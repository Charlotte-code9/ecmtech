<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home')}}">
        <div class="">
            <i class=""><img src="{{ asset('-admin/img/ecmtechlogo.png')}}" width="50px"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ECM-TECH </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Transaction Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-tasks"></i>
            <span>Transactions</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.reservations.index') }}"> <i class="fas fa-eye"> Reservations </i> </a>
                <a class="collapse-item" href="{{ route('admin.borroweditems.index') }}"> <i class="fas fa-file-export"> Borrowed Items</i> </a>
                <a class="collapse-item" href="{{ route('admin.returneditems.index') }}"> <i class="fas fa-calendar-check"> Returned Items </i></a>
                <a class="collapse-item" href="{{ route('admin.lostitems.index') }}"> <i class="fas fa-calendar-check"> Lost Items </i></a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Equipment -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.equipment.index') }}">
            <i class="fas fa-desktop"></i>
            <span>Equipment</span></a>
    </li>

     <!-- Nav Item - Borrower -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.borrower.index') }}">
            <i class="fas fa-user"></i>
            <span>Borrowers</span></a>
    </li>

     <!-- Nav Item - Room -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.room.index') }}">
            <i class="fas fa-window-maximize"></i>
            <span>Room</span></a>
    </li>

     <!-- Nav Item - Inventory -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.inventory.index') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Inventory</span></a>
    </li>

     <!-- Nav Item - Graph -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.graph.index') }}">
            <i class="fas fa-chart-line"></i>
            <span>Graph</span></a>
    </li>


     <!-- Nav Item - History -->
     <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.activity-logs.index') }}">
            <i class="fas fa-history"></i>
            <span>Activity Logs</span></a>
    </li>

     <!-- Nav Item - Co-Admin
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.useradmin.index') }}"> <i class="fas fa-eye"> Add Co-Admin </i> </a>
            </div>
        </div>
    </li>-->



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
