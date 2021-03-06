<header class="app-header navbar">
<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="{{url('/admin')}}">
    <img class="navbar-brand-full" src="{{asset('amsw-files/logo-fix-transparan.png')}}" width="50" alt="AMSW Logo">    
    AMSW 2019
</a>
<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>

<ul class="nav navbar-nav ml-auto">
    {{-- <li class="nav-item d-md-down-none">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fa fa-home" aria-hidden="true"></i> Home
        </a>
    </li> --}}
    <li class="nav-item mx-4">
        <a class="nav-link" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-lock" aria-hidden="true"></i> Logout
        </a>
    </li>
    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</ul>

{{-- <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>
<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
    <span class="navbar-toggler-icon"></span>
</button> --}}
</header>