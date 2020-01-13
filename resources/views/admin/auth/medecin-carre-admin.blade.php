


<!doctype html>
<!-- <html class="no-js" lang="en"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MaSanté</title>
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
        <link rel="stylesheet" href="{{asset('img2')}}"/>
        <link rel="shortcut icon" type="image/x-icon" href="img2/favicon.png">
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
						<!-- <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li> -->
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
                        <!-- <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Product List" href="#"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="#"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
                           </ul>
                        </li> -->
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
                                            <!-- <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div> -->
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
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
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
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-chat"></i> Latest News</h2>
                                                                        <p>You have 10 New News.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                                <!-- le foreach -->
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="row" style="">
                                                                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"style="width:310px;color:white;">
                                                                                            <!-- la variable du name -->
                                                                                        </div>
                                                                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin-left:10px;margin-bottom:10px;">
                                                                                                <form action="" method="post">
                                                                                                @csrf
                                                                                                @method('delete') 
                                                                                              <button type="submit" name="delete" data-toggle="tooltip" title="Supprimer" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                                </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li><br>
                                                                            <!-- le ednforeach -->
                                                                         
                                                                         
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
												<h2>Bureau</h2>
												<!-- <p>Bienvenue <span class="bread-ntd">sue votre lieu de travail</span></p> -->
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<a href="{{ route('home-admin') }}" data-toggle="tooltip" data-placement="left" title="" style="color: white" class="btn">Home-Medecin</i></a>
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
                        <!-- <a href="#"><img class=" profile-dtl" src="{{asset('storage/'.Auth::user()->images)}}" alt="" style="width:230px;height:130px;"></a> -->
                        <!-- @foreach($medecin_carre as $medecin)
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>{{$medecin->prenom}}</b> <b>{{$medecin->name}}</b></h4>
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
                        </div>
                        @endforeach -->
                        <!-- fin de la div -->
                      

                    </div>
                </div>
            </div>
        </div>
   <br>
   <!-- ------------------------------------------------------------------------------------------------ -->
        <div class="traffic-analysis-area">
            <div class="container-fluid">
                <div class="row">
                    <!-- debut de la div -->
                    @foreach($medecin_carre as $medecin)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom:-20px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="width:;">
                                <!-- <h4 class="text-left text-uppercase"><b>Orders</b></h4> -->
                                <div class="row vertical-center-box vertical-center-box-tablet"  >
                                    <div class="col-xs-4" style="margin:0px;">
                                        <img src="{{asset('storage/'.$medecin->images)}}" alt="" style="">
                                    </div>
                                    <div class="col-xs-8 cus-gh-hd-pro">
                                        <h6 class="text-left no-margin" style="color: beige;margin-left:-15px;">{{$medecin->prenom}} {{$medecin->name}}
                                    
                                    </h6>
                                        <p style="color:beige;margin-left:-15px;" class="text-left">{{$medecin->email}}</p>
                                        <p style="color:beige;margin-top:-13px;margin-left:-15px;" class="text-left">{{$medecin->created_at}}</p>
                                        <p style="margin-bottom:-10px;margin-top:-13px;margin-left:-15px;" class="text-left">
                                            <form action="/medecin-list-admin/{{$medecin->id}}" method="post" style="margin-bottom: -30px;" >
                                        @csrf
                                        @method('delete') 
                                        <button type="submit" name="delete" data-toggle="tooltip" class="btn-xs btn btn-block btn-danger" style="margin-left: -18px;margin-top:10px;" >Supprimer</button>
                                        <!-- <button type="submit" style="color: white;" name="delete" data-toggle="tooltip" title="Supprimer" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
                                       
                                    </form>
                                        </p>
                                    </div>
                                </div>
                                
                            </div><br><br>
                        </div>
                        @endforeach
                        <span style="margin-left:;"> {{$medecin_carre->links()}}</span>
               
                   
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
                        <p>Copyright © 2020 | Disign By Ousmane Diallo KEDOUGOU</p>
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
    

</html>
</body>