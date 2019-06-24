<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 
    <meta name="title" content="AMSW 2019">
    <meta name="description" content=" Airlangga Medical Scientific Week (AMSW) is an annual scientific event held by the Faculty of Medicine Airlangga University. Made by Software Silo.">
    <meta name="keywords" content="AMSW 2019, AMSW, FK UNAIR, Software Silo">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="author" content="Software Silo">

    <title>AMSW <?php echo date("Y"); ?> Dashboard</title>
    
    <!-- Icons-->
    <link rel="shortcut icon" type="image/png" href="{{asset('amsw-files/favicon.png')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
{{--     <link href="{{asset('dashboard/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('dashboard/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    
    <!-- Main styles for this application-->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <link href="{{asset('introjs/introjs.css')}}" rel="stylesheet">

    
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
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show aside-menu-lg-show"">
   
    @include('includes.participant.header')

    <div class="app-body">
     
        @include('includes.participant.sidebar')

      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Participant</li>
          <li class="breadcrumb-item active">@yield('path')</li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            
            @yield('content')

          </div>
        </div>
      </main>
      @include('includes.participant.aside')
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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5cb4c169d6e05b735b42b36b/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
      <!--End of Tawk.to Script-->

    <!-- Plugins and scripts required by this view-->
      <script src="{{asset('dashboard/node_modules/chart.js/dist/Chart.min.js')}}"></script>
      <script src="{{asset('dashboard/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
      <script src="{{asset('dashboard/js/main.js')}}"></script>
      <script type="text/javascript" src="{{asset('introjs/intro.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>
      <script>      
        $('.price').mask('0.000.000.000.000', {reverse: true});
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131788430-2"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131788430-2');
      </script>

    @yield('script')
  </body>
</html>
