


<!doctype html>
<!-- <html class="no-js" lang="en"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dashbord-admin') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Google Fonts
        ============================================ -->
        
        <link rel="stylesheet" href="{{asset('fonts')}}"/>
        <link rel="stylesheet" href="{{asset('pdf')}}"/>
        <link rel="stylesheet" href="{{asset('img')}}"/>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <!-- nalika Icon CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/nalika-icon.css')}}">
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <!-- meanmenu icon CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- morrisjs CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/morrisjs/morris.css')}}">
        <!-- mCustomScrollbar CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- metisMenu CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">
        <!-- calendar CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- modernizr JS
        ============================================ -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
        
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<!-- Debut de la sidebar -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img2/logo3.png" alt="" /></a>
                <strong><img src="img2/logo3.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
                    <a href="#">
                        <!-- <img src="img/notification/4.jpg" alt="" /> -->
                  <img class="img-thumbnail" src="{{asset('storage/'.Auth::user()->images)}}" alt="">
                </a>
					<h2>{{ Auth::user()->prenom }}<span class="min-dtn"> {{ Auth::user()->name }} </span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Patients</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Product List" href="{{ route('patient-list') }}"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="{{ route('patient-carre') }}"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Medecins</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Product List" href="{{ route('medecin-list') }}"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="{{ route('medecin-carre') }}"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
                            </ul>
                        </li>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Product List" href="#"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="#"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
                           </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div> 
    <!-- fin de la sidebar -->

    <!-- Debut du header-->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login-admin') }}">{{ __('Connexion Admin') }}</a>
                                            </li>
                                            @if (Route::has('register-admin'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register-admin') }}">{{ __('Inscription Admin') }}</a>
                                            </li>
                                            @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i><span class="indicator-ms">{{count($medecin_comment)}}</span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Messages des Medecins</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                    @foreach($medecin_comment as $com)
                                                                <a href="#">
                                                                    <!-- <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div> -->
                                                                    <div class="message-content">
                                                                        <span class="message-date"></span>
                                                                        <h2>{{$com->name}}</h2>
                                                                        <p>{{$com->email}}</p>
                                                                        <p>{{$com->comment}}</p>
                                                                        <form action="/home-medecin-comment/{{$com->id}}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <br>
                                                                            <button type="submit" name="delete" data-toggle="tooltip" title="" class=" btn btn-primary">Supprimer</button>
                                                                        </form>
                                                                    </div>
                                                                </a>
                                                                <hr>
                                                                @endforeach
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">Voir tout les Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt">{{count($patient_comment)}}</span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Message des Patients</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                @foreach($patient_comment as $com)
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date"></span>
                                                                        <h2>{{$com->name}}</h2>
                                                                        <p>{{$com->email}}</p>
                                                                        <p>{{$com->comment}}</p>
                                                                        <form action="/home-patient-comment/{{$com->id}}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <br>
                                                                            <button type="submit" name="delete" data-toggle="tooltip" title="" class=" btn btn-primary">Supprimer</button>
                                                                        </form>
                                                                    </div>
                                                                </a>
                                                                <hr>
                                                                @endforeach

                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">Voir tout les Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-user"></i>
															<span class="admin-name"> {{ Auth::user()->prenom }}  {{ Auth::user()->name }} </span>
															<i class="icon nalika-down-arrow nalika-angle-dw"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" href="{{ route('logout') }}">
                                                        <li>
                                                            <a href="{{ route('register-admin') }}"><span class="icon nalika-home author-log-ic"></span>Ajouter Admin</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('register-medecin') }}"><span class="icon nalika-home author-log-ic"></span>Ajouter Medecin</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('editer_admin',Auth::user()->id)}}"><span class="icon nalika-user author-log-ic"></span> Mon Profile</a>
                                                           
                                                        </li>
                                                        <li><a href="lock.html"><span class="icon nalika-diamond author-log-ic"></span>Voire</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span>Paramettre</a>
                                                        </li>
                                                        <li><a href="#" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><span class="icon nalika-unlocked author-log-ic"> {{ __('Deconnexion') }}</span>
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                        </form>
                                                    </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">Specialites</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Rendez-Vous</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate" style="margin-bottom: -8px;">
                                                                        <p style="color:silver;font-family:italic;font-size:15px;">Vous avez {{count($comment)}} Commentaires aux total</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                                @foreach($comment as $sp)
                                                                            <li>
                                                                                <a href="#" style="color:white;">
                                                                                    <div class="row container" style="width:400px;">
                                                                                       <p>{{$sp->name}}</p>
                                                                                       <p>{{$sp->email}}</p>
                                                                                       <span >{{$sp->comment}}</span>
                                                                                       <form action="/home-admin/{{$sp->id}}" method="post">
                                                                                            @csrf
                                                                                            @method('delete')
                                                                                            <br>
                                                                                            <button type="submit" name="delete" data-toggle="tooltip" title="" class=" btn btn-primary">Supprimer</button>
                                                                                        </form>
                                                                                    </div><hr>
                                                                                </a>
                                                                            </li><br>
                                                                            @endforeach
                                                                         
                                                                         
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--  -->
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-gear"></i> Settings Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                            <label class="onoffswitch-label" for="example">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endguest
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin du hrader-->
            <!-- Debut du menu du boton deroulant lors de la responsive-->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Medecin<span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                            <li><a title="Product List" href="{{ route('medecin-list') }}"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="{{ route('medecin-carre') }}"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Patients<span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a title="Product List" href="{{ route('patient-list') }}"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="{{ route('patient-carre') }}"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
                                            </ul>
                                        </li>
                                        <!-- <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin du menu du bouton deroulan lors de la responsive -->

            <!-- Debut du contenu -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Tableau de bord</h2>
												<!-- <p>Bienvenue <span class="bread-ntd">sue votre lieu de travail</span></p> -->
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <!-- debut de la div -->
                        <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                          
                                <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">10,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- fin de la div -->
                      
    <!-- div exemple-->

    <!-- fin div exemole -->
                    </div>
                </div>
            </div>
        </div>
   <!-- ------------------------------------------------------------------------------------------------ -->


            <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>La liste des specialites</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
													<input type="radio" name="options" class="toggle" id="option1" checked=""></label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="" class="">
                            <form action="{{route('specialite-medecin')}}" method="post">
                                       @csrf
                                    <label for="specialite" style="color:beige;" class="">{{ __('Specialite') }}</label>
                                    <input style="" id="specialite" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="specialite" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!-- le bouton -->
                                    <div class="form-group row "  style="margin-top: 12px; margin-bottom:-30px;">
                                    <div class="col-sm-5" >
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Ajouter
                                    </button>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-5" >
                                    <button type="reset" class="btn btn-success btn-block">
                                    {{ __('Reinitaliser') }}
                                    </button>
                                    </div>
                                    </div>
                                </form>
                                <div class="product-status-wrap">
                            
                            <table class="table-condensed">
                                {{$i = 0}}
                                <tr>
                                    <th class="">No</th>
                                    <th class="">Titres</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><span class="text-success ">Options</span></th>
                                </tr>
                                @foreach($recup_spec as $user)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$user->name}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button data-toggle="modal"  data-target="#exampleModal" data-id="{{$user->id}}" data-mytitle="{{$user->name}}"  title="Edit" class="pd-setting-ed btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                       
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <span> {{$recup_spec->links()}}</span>
                        </div>
                        </div>
                        </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('spacialite_update','test')}}" method="post">
                                        {{method_field('patch')}}
                                       {{@csrf_field()}}
                                            <div class="modal-body">
                                                <input type="hidden" name="spec_name" id="spec_id" value="">
                                                <label for="specialite" style="color:beige;" class="">{{ __('Specialite') }}</label>
                                                <input  id="specialite" type="text" class="form-control @error('name') is-invalid @enderror text-center" name="specialite" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('specialite')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                            <h3 class="box-title">Total Medecins</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{count($medecin)}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Total Patients</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{count($patient)}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Total Specialites</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{count($recup_spec)}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Total Commentaire</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">{{count($comment)}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <!-- Fin du contenu  -->
        <br>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020 <a style='text-decoration:underline;' href="https://colorlib.com/wp/templates/">GalimaTech</a> Disigned by <span class='text-danger'>Ousmane Diallo</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery-price-slider.js')}}"></script>
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <script src="{{asset('js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/metisMenu/metisMenu-active.js')}}"></script>
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar-active.js')}}"></script>
    <script src="{{asset('js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('js/flot/flot-active.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    
    <script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var title = button.data('mytitle') 
  var spec_id = button.data('id') 
  var modal = $(this)
  modal.find('.modal-body #specialite').val(title)
  modal.find('.modal-body #spec_id').val(spec_id)
})
    </script>
</html>
</body>