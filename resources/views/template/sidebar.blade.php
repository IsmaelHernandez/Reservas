<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #95A5A6;" >

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Reservas<sup>1.0</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed text-uppercase" href="users" data-toggle="collapse" data-target="#users"
            aria-expanded="true" aria-controls="users">
            <i class="fas fa-bars"></i>
            <span>Usuarios</span>
        </a>
        <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">usuarios</h6>
                <a class="collapse-item" href="{{ route('users.index')}}">Usuarios</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed text-uppercase" href="posts" data-toggle="collapse" data-target="#posts"
            aria-expanded="true" aria-controls="posts">
            <i class="fas fa-bars"></i>
            <span>Posts</span>
        </a>
        <div id="posts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">posts</h6>
                <a class="collapse-item" href="{{ route('posts.index')}}">Posts</a>
            </div>
        </div>
    </li>
    

    <li class="nav-item">
        <a class="nav-link collapsed text-uppercase" href="new_pay" data-toggle="collapse" data-target="#new_pay"
            aria-expanded="true" aria-controls="new_pay">
            <i class="fas fa-bars"></i>
            <span>Nuevo pago</span>
        </a>
        <div id="new_pay" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Nuevo pago</h6>
                {{-- <a class="collapse-item" href="{{ route('pay.reference')  }}">Nuevo pago</a> --}}
            </div>
        </div>
    </li>

    {{-- si eres cliente no me muestres roles --}}
    {{-- @if( isset(Auth()->user()->id) && Auth::user()->hasRole('SuperAdministrador')) --}}
    <li class="nav-item">

        <a class="nav-link collapsed text-uppercase" href="roles" data-toggle="collapse" data-target="#roles"
            aria-expanded="true" aria-controls="roles">
            <i class="fas fa-bars"></i>
            <span>Roles</span>
        </a>

        <div id="roles" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Roles</h6>
                <a class="collapse-item" href="">Roles</a>
            </div>
        </div>
    </li>
    {{-- @endif --}}

    {{-- Si eres cliente no me muestres usuarios --}}
    {{-- @if(isset(Auth()->user()->id) && Auth::user()->hasRole('SuperAdministrador')) --}}
    
    <li class="nav-item">

        <a class="nav-link collapsed text-uppercase" href="pagoterceros" data-toggle="collapse" data-target="#pagoterceros"
            aria-expanded="true" aria-controls="pagoterceros">
            <i class="fas fa-bars"></i>
            <span>Pago Terceros</span>
        </a>

        <div id="pagoterceros" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">pagoterceros</h6>
                {{-- <a class="collapse-item" href="{{route('pagoterceros.index')}}">Pago terceros</a> --}}
            </div>
        </div>
    </li>
    {{-- @endif --}}

    
    {{-- @if(isset(Auth()->user()->id) && Auth::user()->hasRole('SuperAdministrador')) --}}
    <li class="nav-item">

        <a class="nav-link collapsed text-uppercase" href="catalogos" data-toggle="collapse" data-target="#catalogos"
            aria-expanded="true" aria-controls="catalogos">
            <i class="fas fa-bars"></i>
            <span>Catalogos</span>
        </a>

        <div id="catalogos" class="collapse" aria-labelledby="headingCatalogos" data-parent="#catalogos">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Catalogos</h6>
                    <a class="collapse-item" href="">Bines</a>
            </div>
        </div>
    </li>
    {{-- @endif --}}

    

</ul>