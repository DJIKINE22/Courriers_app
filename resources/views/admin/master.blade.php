<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Gescourrier</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
      <!-- Ionicons -->
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    
    </head>
 <body >
    <div class="">
      
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-primary">
      <img  src="dist/img/logo.png" alt="gescourrier" height="60" width="80">
        <!-- Left navbar links -->
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style="color: white ;">
            <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <div class="media-body">
                    <h3 class="dropdown-item-title"> 
                    <p>Se deconnecter</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                
                  <div class="media-body">
                  <h3 class="dropdown-item-title"> 
                    <p>Entreprise</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                    <p>Compte</p>
                    </h3>
                  </div>
                </div>
                <!-- Message End -->
              </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark">
            <!-- Brand Logo -->
            <div class="p-3 mt-4 bg-warning text-dark">
            <p>Entreprise</p>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    
                    <div class="info">
                        <a href="#" class="d-block"><i class="fas fa-user"></i> Admin</a>
                        <p>connecter</p>
                        <p>departement</p> 
                        <p>directeur</p> 
                    </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Accueil
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                    <p class="">
                        COURRIER ENTRANT
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>
                        COURRIER SORTANT
                        <span class="badge badge-info right"></span>
                    </p>
                    </a>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>ARCHIVES</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <p>CORBEILLES</p>
                    </a>
                </li>
                </ul>
            </nav>
            </div>
          </aside>
      @yield('content')
      
    </div>

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 </body>
</html>
