
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MaSante</title>
  <link rel="icon" href="img2/favicon.png">
  <!-- Custom fonts for this template-->
  <link href="{{asset('user/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('user/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/img')}}" rel="stylesheet">
  <link href="{{asset('img2')}}" rel="stylesheet">

</head>

<body id="page-top">
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<!-- <script>
   tinymce.init({
       selector:'textarea.description',
       width: 475,
       height: 200
   });
</script> -->
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Debut du sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <img src="favicon.png" alt=""> -->
        </div>
        <div class="sidebar-brand-text mx-3"><img src="img2/logo3.png" alt=""><sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de Bord</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

  

      <!-- Divider -->

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="{{ route('register-client') }}">Inscription</a>
            <a class="collapse-item" href="{{route('home-table')}}">Randez-vous</a>
            <a class="collapse-item" href="#">Vos Rapports</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a type="button" class=" collapse-item" data-toggle="modal" data-target="#exampleModal">
            commentaires
            </a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- la fin du sidebare-->


    <!-- Debut de la navebar -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">+{{count($notifications)}}</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Toutes vos notifications
                </h6>
                @foreach($notifications as $sms)
                <a class="dropdown-item d-flex align-items-center" href="{{route('notif',$sms->id)}}">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                    <img class="img-profile rounded-circle" src="{{asset('storage/'.$sms->medecins->images)}}">
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">{{$sms->date}} {{$sms->heure}}</div>
                    <span class="">
                      Vous avez une noti de {{$sms->medecins->prenom}} {{$sms->medecins->name}}
                      <!-- <span><a href="" style="width: 100px;height:100px;">lire</a></span> -->
                    </span>
                  </div>
                </a>
                @endforeach
                <a class="dropdown-item text-center small text-gray-500" href="{{route('home-table')}}">Voire Tout</a>
              </div>
            </li>
            <!-- Debut des messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7+</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Tous vos messages
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
             
                <a class="dropdown-item text-center small text-gray-500" href="#">Lire tous les  Messages</a>
              </div>
            </li>
        <!-- fin des messages  -->
            <div class="topbar-divider d-none d-sm-block"></div>
           
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->prenom }} {{ Auth::user()->name }} </span>
                <img class="img-profile rounded-circle" src="{{asset('storage/'.Auth::user()->images)}}"style="width:30px;height:30px;">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">      
                <a class="dropdown-item" href="{{ route('register-client') }}">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Inscription
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('editer_patient',Auth::user()->id) }}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile 
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Se Deconnecter
                </a>
              </div>
            </li>
      
          </ul>

        </nav>
        <!-- fin de la navebar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Multipliez vos chances de guerrire</h1>
            <div class="contente ">
            @if(session('success'))
              <p class="alert alert-success">{{session('success')}}</p>
            @endif
            <!-- Button trigger modal -->
<button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
  Poster vos commentaires
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('user_comment')}}" method="POST">
        @csrf
        <div class="modal-body">
              <input type="hidden" class="form-control" name="name" value="{{Auth::user()->name}}">
              <input type="hidden" class="form-control" name="prenom" value="{{Auth::user()->prenom}}">
              <input type="hidden" class="form-control" name="email" value="{{Auth::user()->email}}">
              <textarea name="comment" class="form-control description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reinitialiser</button>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>
          </div>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Vos Rapports</a>
          </div>

          <!-- Debut du row des div d'affichage -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            @foreach($medecins as $medecin)
            <div class="col-xl-3 col-md-6 mb-4" style="padding-right:0px;margin-bottom:-10px;">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <img src="{{asset('storage/'.$medecin->images)}}" alt="" class="img-rounded img-responsive " style="width:50px;height:50px;margin-top:-40px;margin-left:-15px;">
                    </div>
                    <div class="col mr-2" style="margin-bottom:-25px;">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="margin-left:15px;margin-top:-20px;">{{$medecin->prenom}} {{$medecin->name}}</div>
                      <div class="" style="margin-left:15px;font-size:13px;text-align:left;">Specialiste en {{$medecin->specialite->name}} et travail a {{$medecin->adresse}}</div>
                      <!-- debut du modal -->
                      <a href="{{route('preparer',$medecin->id)}}">Faite votre demande</a>
                   
                            <!-- fin du modal -->
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div> 
          <!-- fin du row des div d'affichage -->
          <!-- Content Row -->

          <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020 | Design by Ousmane Diallo </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <div class="modal-body">Etes vous sur de vouloire vous deconnecter</div>
        <div class="modal-footer">
          <a class="dropdown-item btn btn-primary" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><span class="btn btn-primary">Confirmer</span></a>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
        </div>
      </div>
    </div>
  </div>


  

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('user/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('user/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('user/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('user/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('user/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
