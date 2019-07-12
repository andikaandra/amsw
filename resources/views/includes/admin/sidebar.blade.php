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
                <span class="font-weight-bold mb-2">{{str_limit(Auth::user()->name, 15)}}@if(Auth::user()->status > 3) <i class="fas fa-check text-info"></i> @endif</span>
                </div>            
            </div>
        </a>
        </li>
    <li class="nav-title">Main</li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('admin')}}">
        <i class="nav-icon icon-home"></i> Home</a>
    </li>
    
    <li class="nav-title">Competitions</li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon icon-pencil"></i> Registrations</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/registration/educational-video')}}">
                <i class="nav-icon fas fa-code-branch"></i> Educational Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/registration/essay')}}">
                <i class="nav-icon fas fa-code-branch"></i> Essay</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/registration/literature-review')}}">
                <i class="nav-icon fas fa-code-branch"></i> Literature Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/registration/public-poster')}}">
                <i class="nav-icon fas fa-code-branch"></i> Public Poster</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/registration/research-paper')}}">
                <i class="nav-icon fas fa-code-branch"></i> Research Paper</a>
            </li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon icon-note"></i> Submissions</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/verify/submissions/educational-video')}}">
                <i class="nav-icon icon-cursor"></i> Educational Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/verify/submissions/essay')}}">
                <i class="nav-icon icon-cursor"></i> Essay</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/verify/submissions/literature-review')}}">
                <i class="nav-icon icon-cursor"></i> Literature Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/verify/submissions/public-poster')}}">
                <i class="nav-icon icon-cursor"></i> Public Poster</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/verify/submissions/research-paper')}}">
                <i class="nav-icon icon-cursor"></i> Research Paper</a>
            </li>
        </ul>
    </li>

    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon icon-list"></i> Final Waiting List</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/waiting-list/educational-video')}}">
                <i class="nav-icon icon-cursor"></i> Educational Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/waiting-list/essay')}}">
                <i class="nav-icon icon-cursor"></i> Essay</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/waiting-list/literature-review')}}">
                <i class="nav-icon icon-cursor"></i> Literature Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/waiting-list/public-poster')}}">
                <i class="nav-icon icon-cursor"></i> Public Poster</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/waiting-list/research-paper')}}">
                <i class="nav-icon icon-cursor"></i> Research Paper</a>
            </li>
        </ul>
    </li>

        <li class="nav-title">Settings</li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/settings')}}">
                <i class="nav-icon icon-wrench"></i> Account</a>
        </li>
   
    </ul>
</nav>

</div>
