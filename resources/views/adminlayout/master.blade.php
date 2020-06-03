<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" type="image/x-icon" href="https://forum.naijaswift.com/img/fav.ico" />
<link rel="apple-touch-icon" href="https://forum.naijaswift.com/img/naijaswift-Iphone.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{$title}}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta name="robots" content="noindex">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!--     Fonts and icons     -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="{{asset('assets/js/select2.min.js')}}"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>

  <!-- CSS Files -->

   <link href="{{asset('assets/css/select2/select2.min.css')}}" rel="stylesheet" /> 
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

<link rel="apple-touch-icon" sizes="57x57" href="{{asset('icons/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{asset('icons/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('icons/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('icons/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('icons/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('icons/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('icons/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('icons/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('icons/apple-icon-180x180.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('icons/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('icons/favicon-16x16.png')}}">
<link rel="shortcut icon" href="{{asset('icons/favicon.ico')}}">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="red">
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="/pub" class="simple-text logo-normal">
          Real Estate Admin Panel
        </a>
      </div>
      <div class="logo">
        <a href="/" class="simple-text logo-normal">
          Back To Website
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ 'pub' == request()->path() ? 'active' : ''}}">
            <a href="/admin">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ 'admin-posts' == request()->path() ? 'active' : ''}} dropdown">
            <a href="/admin-posts">
              <i class="now-ui-icons education_atom"></i>
              <p>All Posts</p>
            </a>
          </li>
          <li class="{{ 'posts-bin' == request()->path() ? 'active' : ''}} dropdown">
            <a href="/posts-bin">
              <i class="now-ui-icons education_atom"></i>
              <p>Posts Bin</p>
            </a>
          </li>
          <li class="{{ 'all-category' == request()->path() ? 'active' : ''}} dropdown">
            <a href="/all-category">
              <i class="now-ui-icons education_atom"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="{{ 'new-tags' == request()->path() ? 'active' : ''}}">
            <a href="/new-tags">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Tags</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_map-big"></i>
            Posts Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a href="/all-music">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Music</p>
            </a>
            <a href="/all-video">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Video</p>
            </a>
            <a href="/all-news">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>News</p>
            </a>
            <a href="/all-reviews">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Reviews</p>
            </a>
            </div>
          </li>
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_map-big"></i>
            Pages
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a href="/new-about">
              <i class="now-ui-icons location_map-big"></i>
              <p>About Us</p>
            </a>
            <a href="/new-privacy">
              <i class="now-ui-icons location_map-big"></i>
              <p>Privacy Policy</p>
            </a>
            <a href="/new-copyright">
              <i class="now-ui-icons location_map-big"></i>
              <p>Copyright Info</p>
            </a>
            <a href="/new-tos">
              <i class="now-ui-icons location_map-big"></i>
              <p>Tos</p>
            </a>
          </div>
        </li>
        
          <li class="{{ 'role-register' == request()->path() ? 'active' : ''}}">
            <a href="/role-register">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profiles</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form method="GET" action="{{ route('searchadmin') }}" accept-charset="UTF-8">
              <div class="input-group no-border">
                <input type="text" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret" style="display:none;"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">

        @yield('content')

        

      </div>


      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://monstajamss.com" target="_blank">MonstaJamss Admin</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->

  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  @yield('scripts')


</body>

</html>