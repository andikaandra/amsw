<div class="sidebar" data-step="3" data-intro="You can access different pages by choosing a Menu from this side bar.">
<nav class="sidebar-nav" >
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
              <span class="font-weight-bold mb-2">{{str_limit(Auth::user()->name, 15)}}@if(Auth::user()->status > 3) <i class="fas fa-check text-info"></i> @endif</span>
            </div>            
        </div>
      </a>
    </li>

    <li class="nav-title">Main</li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('participant')}}">
        <i class="nav-icon fas fa-home"></i> Home</a>
    </li>
    @if(Auth::user()->status >= 3)
    <li class="nav-item">
        <a class="nav-link" href="{{ url('participant/teams')}}">
        <i class="nav-icon fas fa-user-friends"></i> My Team
        </a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link disabled" href="#">
        <i class="nav-icon fas fa-user-friends"></i> My Team
        </a>
    </li>
    @endif

    @if(Auth::user()->status > 3)
    <li class="nav-item">
        <a class="nav-link" href="{{ url('participant/submission')}}">
        <i class="nav-icon fas fa-upload"></i> Submission        
        </a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link disabled" href="#">
        <i class="nav-icon fas fa-upload"></i> Submission        
        </a>
    </li>

    @endif

    @if(Auth::user()->email_verification == 'verified')
      <li class="nav-title">Registration</li>
      <li class="nav-item">
          <a class="nav-link" href="{{ url('participant/registration')}}">
          <i class="nav-icon fas fa-code-branch"></i> Registration</a>
      </li>
    @else
    <li class="nav-title">Registration</li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">
        <i class="nav-icon fas fa-code-branch"></i> Registration</a>
    </li>

    @endif    
    
    <li class="divider"></li>
    </ul>
</nav>
</div>