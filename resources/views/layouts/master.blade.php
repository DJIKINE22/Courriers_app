<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Gescourrier</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
      <!-- Ionicons -->
      <!-- Theme style -->
      <!-- <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}"> -->
    
    </head>
 <body >


<div class="container-fluid">
 <nav class="navbar">
  <div class="row" style="background-color:blue ;"> 
    <div class="col-md-2" style="background-color:#F39200; text-align:centre;"><p>Entreprise</p>
    </div>

    <div class="col-md-5 ">
    <img src="{{asset('images/logo1.JPG')}}" style="width:10%; float:right " alt="gescourrier; te">
    </div>

    <div class="col-md-5">
          <div class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" style="color:#F39200; ">
                    <i class="fa fa-cog" style="float:rigth;"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                        <!-- deconnexion -->
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Se deconnecter') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                        <!-- deconexion fin -->
                      
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                        <!-- Message Start --> 
                            <p>Entreprise</p>
                        <!-- Message End -->
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                            <p>Compte</p>
                        <!-- Message End -->
                      </a>
        </div>
  </div>
    </div>
</nav>


<!-- Main Sidebar Container -->
<div class="row">
      <div class="col-md-2">
          <aside class="main-sidebar sidebar-dark">
                <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info">
                            <div class="d-block"><i class="fas fa-user"></i>{{Auth::user()->name}}</div>
                            <p>connecté</p>
                            <p>{{Auth::user()->departement}}</p> 
                            <p>{{Auth::user()->type}}</p> 
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

    </div>

    <div class="col-md-10" >

        <div class="input-group col-md-4">
            <input class="form-control py-2" type="search" value="recherche des courriers" id="example-search-input">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>


<div class="col-md-4">
      <input class="" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
  </div>
</div>         
    


    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 </body>
</html>
