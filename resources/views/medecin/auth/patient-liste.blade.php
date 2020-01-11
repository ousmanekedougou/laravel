


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
                            <li><a title="Product List" href="{{ route('patient-liste') }}"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="{{ route('patient-carres') }}"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
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
													<input type="text" placeholder="Search..." class="form-control text-center " style="color:azure;">
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
                                                        </li>
                                                        <li>
                                                            <a href="{{route('editer_medecin',Auth::user()->id)}}  "><span class="icon nalika-user author-log-ic"></span> Mon Profile</a>
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
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
           
                                                                         
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

                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Patients<span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a title="Product List" href="{{ route('patient-liste') }}"><span class="mini-sub-pro">Afficher Par list</span></a></li>
                                <li><a title="Product Edit" href="{{ route('patient-carres') }}"><span class="mini-sub-pro">Afficher Par Carre</span></a></li>
                                            </ul>
                                        </li>
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
												<p>Bienvenue <span class="bread-ntd">sue votre lieu de travail</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<a href="{{ route('home-medecin') }}" data-toggle="tooltip" data-placement="left" style="color:white;" title="" class="btn">Home-Medecin</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!--  -->
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>La liste des Patients</h4>
                            <div class="add-product">
                            </div>
                            <table class="table-condensed">
                                <tr>
                                    <th>Profil</th>
                                    <th>Motif</th>
                                    <th>Email</th>
                                    <th>Date et Heure</th>
                                    <th><span class="text-danger">Options</span></th>
                                </tr>
                                @foreach($user_carre as $recup)
                                @foreach($recup->users as $r)
                                <tr>
                                    <td><img src="{{asset('storage/'.$r->images)}}" alt="" /></td>
                                    <td>
                                        <h5>{{$r->prenom}} {{$r->name}}</h5>
                                        <p>{{$recup->motif}}</p>
                                    </td>
                                    <td>{{$r->email}}</td>
                                    <td>
                                        @if($recup->heure == '' AND $recup->date == '')
                                            Pas fixer
                                        @endif
                                        @if($recup->heure != '' AND $recup->date != '')
                                            {{$recup->date}} || {{$recup->heure}}
                                        @endif
                                    </td>
                                    <!-- <td>{{$r->adresse}}</td> -->
                                    <td>
                                    @if($recup->heure == '')
                                       
                                        <!-- debut du modal fixer -->
                                        <!-- <button data-toggle="tooltip" data-toggle="modal" data-target="#exampleModal" title="Fixer" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> -->
                                        <button  type="button" class="btn btn-success btn-xs" title="Fixer" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Donner la date et l'heure du rendez-vous</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('fixer',$recup->id)}}" method="POST">
                                                    <div class="modal-body">
                                                    {{csrf_field()}}
                                                    {{method_field('PUT')}}
                                                        <input type="date" name="date" id="name" placeholder="donner la date" class="form-control">
                                                        <input type="time" name="time" id="time" placeholder="donner l'heure" class="form-control">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: black;">Fermer</button>
                                                        <button type="submit" class="btn btn-primary">Enregistre</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                                        <!-- fin du modal fixer -->
                                        <!-- <button type="submit"  name="" data-toggle="tooltip" title="Transferer" class="pd-setting-ed"><i class="fa fa-send-o " aria-hidden="true"></i></button> -->
                                                        <!-- debut du modal transfere -->
                                            <button  type="button" class="btn btn-primary btn-xs" title="Transferer" data-toggle="modal" data-target="#exampleModal2">
                                            <i class="fa fa-send-o " aria-hidden="true"></i>
                                            </button>
                                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Donner l'adresse email du medecin a tranferer</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post">
                                                        @csrf
                                                        <input type="email" name="email" id="email" placeholder="Adresse email" class="form-control">
                                                        <!-- <input type="time" name="time" id="time" placeholder="donner l'heure" class="form-control"> -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: black;">Fermer</button>
                                                    <button type="button" class="btn btn-primary">Transferer</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- fin du modal du transfere -->
                                        <button type="submit"  onclick="event.preventDefault();document.querySelector('#form-delet-{{$recup->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer" class="btn-xs btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        <form id="form-delet-{{$recup->id}}" action="/patient-liste/{{$recup->id}}" method="post">
                                        @csrf
                                        @method('delete') 
                                        </form>
                                        @endif
                                        @if($recup->heure != '')
                                        <button type="submit"  onclick="event.preventDefault();document.querySelector('#form-delet-{{$recup->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer" class="btn-xs btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        <form id="form-delet-{{$recup->id}}" action="/patient-liste/{{$recup->id}}" method="post">
                                        @csrf
                                        @method('delete') 
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @endforeach
                            </table>
                            {{$user_carre->links()}}
                            <!-- <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div> -->
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
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
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