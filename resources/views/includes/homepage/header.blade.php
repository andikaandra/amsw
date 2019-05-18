<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-left"><img src="{{asset('amsw-files/logo-fix-transparan-small.png')}}" style="height: 64px; width: auto;"></a>
          <a class="navbar-brand" href="{{url('/')}}" style="margin-top: 5px;">
            AMSW  
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="#tf-team" class="page-scroll">Team</a></li>
            {{-- <li><a href="#tf-services" class="page-scroll">Services</a></li> --}}
            <li><a href="#tf-works" class="page-scroll">Events</a></li>
            <li><a href="#tf-testimonials" class="page-scroll">Programs</a></li>
            <li><a href="#tf-contact" class="page-scroll">Timeline</a></li>
            {{-- <li><a href="#tf-contact" class="page-scroll">Contact</a></li> --}}
            @guest
                <li><a class="page-scroll" href="{{('login')}}"><strong>Login</strong></a></li>
            @else
                @if (Auth::user()->role == 'participant')
                <li><a class="page-scroll" href="{{url('participant')}}"><strong>Dashboard</strong></a></li>
                @else
                <li><a class="page-scroll" href="{{url('admin')}}"><strong>Dashboard</strong></a></li>
                @endif
            <li>
                <a class="page-scroll" href="{{ url('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
            </li>
                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
          </ul>
        </div>
      </div>
    </nav>