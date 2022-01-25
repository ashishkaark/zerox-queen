<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin/dashboard')}}">
        <div >
            <img style="background: transparent;
            border-radius: 100%;
            padding: 8px;
            width: 60px;" src="{{asset('images/logo/logo.png')}}" alt="">
        </div>
        
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

   <li class="nav-item">
       <a class="nav-link collapsed" href="{{url('/admin/homepage')}}">
            <i class="fas fa-home"></i>
            <span>Home Page</span>
       </a>
   </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-cannabis"></i>
            <span>Products</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Products:</h6>
                <a class="collapse-item" href="{{url('/admin/product')}}">Create</a>
                <a class="collapse-item" href="{{url('/admin/product-list')}}">List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Users:</h6>
                <a class="collapse-item" href="{{url('/admin/user')}}">Create</a>
                <a class="collapse-item" href="{{url('/admin/user-list')}}">List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <i class="fas fa-broadcast-tower"></i>
            <span>SEO Pages</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">SEO Pages:</h6>
                {{-- <a class="collapse-item" href="{{url('/admin/vendor')}}">Create</a> --}}
                <a class="collapse-item" href="{{url('/admin/vendor-list')}}">Page List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-shipping-fast"></i>
            <span>Orders</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Orders:</h6>
                {{-- <a class="collapse-item" href="{{url('/admin/product')}}">Create</a> --}}
                <a class="collapse-item" href="{{url('/admin/product-list')}}">List</a>
            </div>
        </div>
    </li>


    {{-- @if(session()->get("GA-auth") == "SUPERADMIN")
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin/removealldata')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Remove All data</span></a>
    </li>
    @endif --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

</ul>