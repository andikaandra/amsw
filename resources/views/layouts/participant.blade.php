<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="AMSW - FK UNAIR">
    <meta name="author" content="Software Silo">
    <meta name="keyword" content="Medicine Competition University">

    <title>AMSW Dashboard</title>
    
    <!-- Icons-->
    <link href="{{asset('dashboard/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    
    <!-- Main styles for this application-->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
        
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show aside-menu-lg-show"">
   
    @include('includes.participant.header')

    <div class="app-body">
     
        @include('includes.participant.sidebar')

      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Participant</li>
          <li class="breadcrumb-item active">Dashboard</li>

{{--           <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li> --}}
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            
            @yield('content')

          </div>
        </div>
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link">
              <i class="icon-list"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Completed Steps</div>
              <div class="list-group-item list-group-item-accent-primary" list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Create account                    
                  </div>
                  <div class="col-2 float-right text-right">
                    <i class="fa fa-check text-primary" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 1 ? 'primary' : 'danger' }}" list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Choose competition branch
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 1)
                    <i class="fa fa-check text-primary" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 2 ? 'primary' : 'danger' }}" list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Upload personal data & proof of payment
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 2)
                    <i class="fa fa-check text-primary" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 2 ? 'primary' : 'danger' }}" list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Verified by admin
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 3)
                    <i class="fa fa-check text-primary" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 2 ? 'primary' : 'danger' }}" list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Upload Submission
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 4)
                    <i class="fa fa-check text-primary" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @if(Auth::user()->status > 5)
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Final Steps</div>
              <div class="list-group-item list-group-item-accent-primary" list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Final registration
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 6)
                    <i class="fa fa-check text-primary" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <span>Hand-crafted & made with <i class="fa fa-heart" style="color: red" aria-hidden="true"></i></span>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('dashboard/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('dashboard/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    {{-- <script src="{{asset('dashboard/node_modules/chart.js/dist/Chart.min.js')}}"></script> --}}
{{--     <script src="{{asset('dashboard/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script> --}}
    <script src="{{asset('dashboard/js/main.js')}}"></script>
  </body>
</html>
