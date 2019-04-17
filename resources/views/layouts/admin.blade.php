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

    <title>AMSW <?php echo date("Y"); ?> Dashboard</title>
    
    <!-- Icons-->
    <link href="{{asset('dashboard/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
{{--     <link href="{{asset('dashboard/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('dashboard/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    
    <!-- Main styles for this application-->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
    <style>
    .card-content{
        box-shadow: 0px 0px 0px grey;
            -webkit-transition:  box-shadow .2s ease-out;
          box-shadow: .8px .9px 3px grey;
      }

      .card-content:hover{ 
        box-shadow: 1px 8px 20px grey;
          -webkit-transition:  box-shadow .2s ease-in;
      }
      .form-control:disabled, .form-control[readonly] {
        background: #fff;
      }

      .heartbeat {
        animation: .8s infinite beatHeart;
      }

      @keyframes beatHeart {
      0% {
        transform: scale(1);
      }
      25% {
        transform: scale(1.1);
      }
      40% {
        transform: scale(1);
      }
      60% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }    
    .list-group-item:hover {
      font-weight: 600;
    }
      
    </style>
    
    @yield('style')
    
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
   
    @include('includes.admin.header')

    <div class="app-body">
     
        @include('includes.admin.sidebar')

      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            Admin
          </li>
          <li class="breadcrumb-item active">@yield('path')</li>
      
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
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="image">
                </div>
                <div>Meeting with
                  <strong>Lucas</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-info">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/4.jpg" alt="image">
                </div>
                <div>Skype with
                  <strong>Megan</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 5pm</small>
                <small class="text-muted">
                  <i class="icon-social-skype"></i>  On-line</small>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <span>Copyright AMSW 2019 © | Handcrafted & Nurtured with huge <i class="fas fa-heart heartbeat" style="color: red" aria-hidden="true"></i> by Software Silo</span>
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
    <script src="{{asset('dashboard/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('dashboard/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>
    <script>      
      $('.price').mask('0.000.000.000.000', {reverse: true});
    </script>
    @yield('script')

  </body>
</html>
