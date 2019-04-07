<div class="sidebar">
<nav class="sidebar-nav">
    <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="{{url('participant')}}" class="nav-link" style="cursor: default;">
        <div class="row justify-content-center">
            <div class="nav-profile-image">
              <img src="{{asset('dashboard/img/avatars/avatar.png')}}" alt="image" style="width: 50px">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
            </div>            
        </div>
      </a>
    </li>

    <li class="nav-title">Theme</li>
    <li class="nav-item">
        <a class="nav-link" href="colors.html">
        <i class="nav-icon icon-drop"></i> Colors</a>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon icon-cursor"></i> Buttons</a>
        <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="buttons/buttons.html">
            <i class="nav-icon icon-cursor"></i> Buttons</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="buttons/button-group.html">
            <i class="nav-icon icon-cursor"></i> Buttons Group</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="buttons/dropdowns.html">
            <i class="nav-icon icon-cursor"></i> Dropdowns</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="buttons/brand-buttons.html">
            <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
        </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="widgets.html">
        <i class="nav-icon icon-calculator"></i> Widgets
        <span class="badge badge-primary">NEW</span>
        </a>
    </li>
    <li class="divider"></li>
    <li class="nav-title">Extras</li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon icon-star"></i> Pages</a>
        <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="login.html" target="_top">
            <i class="nav-icon icon-star"></i> Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.html" target="_top">
            <i class="nav-icon icon-star"></i> Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="404.html" target="_top">
            <i class="nav-icon icon-star"></i> Error 404</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="500.html" target="_top">
            <i class="nav-icon icon-star"></i> Error 500</a>
        </li>
        </ul>
    </li>
    </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>