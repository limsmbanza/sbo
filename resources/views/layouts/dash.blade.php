<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/backend/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('css/backend/assets/images/favicon.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>.active{background:transparent !important;}.hover-open{background:transparent !important;}</style>
  </head>
  <body class="sidebar-icon-only" >
    <div class="container-scroller">	
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"  >
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background:#3B3B98;">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('css/backend/assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('css/backend/assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch" style="box-shadow:0 0 25px rgba(0, 0, 0, 0.3);" >
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Recherche">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('css/backend/assets/images/faces/undraw_profile_pic_ic5t.png') }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Information personnelle </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
		  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form>
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Se déconnecter </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
		  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                <i class="mdi mdi-power"></i>
              </a>
            </li>
         
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>



      <!-- partial -->
      <div class="container-fluid page-body-wrapper" >
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background:#3B3B98;">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('css/backend/assets/images/faces/undraw_profile_pic_ic5t.png') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2" style="color:#fff;">{{ auth()->user()->name }}</span>
                  <span class="text-secondary text-small"style="color:#fff;"></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}">
                <span class="menu-title" style="color:#fff;">Tableau de bord</span>
                <i class="mdi mdi-home menu-icon" style="color:#fff;" style="color:#fff;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title" style="color:#fff;">Site d'exploition</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-shopping" style="color:#fff;"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('agence.index') }}" >site d'exploitation</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('agence.create') }}" >Ajouter un site</a></li>
                </ul>
              </div>
            </li>
	     <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic-2" aria-expanded="false" aria-controls="ui-basic-2">
                <span class="menu-title" style="color:#fff;">Exercice de gestion</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-calendar-multiple-check menu-icon" style="color:#fff;"></i>
              </a>
              <div class="collapse" id="ui-basic-2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.index') }}" >Exercice</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.create') }}" >Ajouter un exercice de gestion</a></li>
                </ul>
              </div>
            </li>
       	   
	        <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic-3" aria-expanded="false" aria-controls="ui-basic-3">
                <span class="menu-title" style="color:#fff;">Produits</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cart menu-icon" style="color:#fff;"></i>
              </a>
              <div class="collapse" id="ui-basic-3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.index') }}" >Produit</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.create') }}" >Ajouter un produit</a></li>
                </ul>
              </div>
              
	        <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic-4" aria-expanded="false" aria-controls="ui-basic-4">
                <span class="menu-title" style="color:#fff;">Budgétisation</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cash-multiple menu-icon" style="color:#fff;"></i>
              </a>
              <div class="collapse" id="ui-basic-4">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.index') }}" >Produit</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.create') }}" >Ajouter un produit</a></li>
                </ul>
              </div>
		  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic-5" aria-expanded="false" aria-controls="ui-basic-5">
                <span class="menu-title" style="color:#fff;">Rapports</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-chart-pie menu-icon" style="color:#fff;"></i>
              </a>
              <div class="collapse" id="ui-basic-5">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.index') }}" >Produit</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('exercice.create') }}" >Ajouter un produit</a></li>
                </ul>
              </div>
                 <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}">
                <span class="menu-title" style="color:#fff;">Plan de compte&nbsp;&nbsp;&nbsp;</span>
                <i class="mdi mdi-file-document menu-icon" style="color:#fff;" style="color:#fff;"></i>
              </a>
            </li>
	         <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}">
                <span class="menu-title" style="color:#fff;">Immo et amortissement&nbsp;&nbsp;&nbsp;</span>
                <i class="mdi mdi-chart-line menu-icon" style="color:#fff;" style="color:#fff;"></i>
              </a>
            </li>
	     <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}">
                <span class="menu-title" style="color:#fff;">Paramètres&nbsp;&nbsp;&nbsp;</span>
                <i class="mdi mdi-settings menu-icon" style="color:#fff;" style="color:#fff;"></i>
              </a>
            </li>
	    
          </ul>
        </nav>
        <!-- partial -->


	@yield('content')









          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('css/backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('css/backend/assets/vendors/chart.js/Chart.min.js' ) }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('css/backend/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('css/backend/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('css/backend/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('css/backend/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('css/backend/assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>









