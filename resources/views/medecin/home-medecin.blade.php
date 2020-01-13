

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MaSanté</title>
    <link rel="icon" href="img2/favicon.png">
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
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<!-- <script>
   tinymce.init({
       selector:'textarea.description',
       width: 570,
       height: 200
   });
</script> -->
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<!-- Debut de la sidebar -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href=""><img class="main-logo" src="img2/logo3.png" alt="" /></a>
                <strong><img src="img2/logo3.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
                <img class="img-thumbnail" src="{{asset('storage/'.Auth::user()->images)}}" alt="">
					
					<h2>{{ Auth::user()->prenom }} <span class="min-dtn">{{ Auth::user()->name }}</span></h2>
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
                                <li><a title="Product List" href="{{ route('patient-liste') }}"><span class="mini-sub-pro">Patient List</span></a></li>
                                <li><a title="Product Edit" href="{{ route('patient-carres') }}"><span class="mini-sub-pro">Patient Carre</span></a></li>
                                

                            </ul>
                        </li>
                        <!-- <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li> -->
                        </li>
                        <!-- <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
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
                                                <a class="nav-link" href="{{ route('login-medecin') }}">{{ __('Connexion Medecin') }}</a>
                                            </li>
                                            @if (Route::has('register-admin'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register-medecin') }}">{{ __('Inscription Medecin') }}</a>
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
															<span class="admin-name">{{ Auth::user()->prenom }} {{ Auth::user()->name }}</span>
															<i class="icon nalika-down-arrow nalika-angle-dw"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
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
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                   
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
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Affichage <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                            <li><a title="Product List" href="{{ route('patient-liste') }}"><span class="mini-sub-pro">Patient List</span></a></li>
                                            <li><a title="Product Edit" href="{{ route('patient-carres') }}"><span class="mini-sub-pro">Patient Carre</span></a></li>
                                
                                        </li>
                                    </ul>
                                        </li>
                                   
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Rendez-vous<span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Les Demandes</a>
                                                </li>
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
												<h2>Bureau</h2>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    @if(session('success'))
                                        <p class="alert alert-success">{{session('success')}}</p>
                                    @endif

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
                                            <form action="{{route('medecin_comment')}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="hidden" class="form-control" name="name" value="{{Auth::user()->name}}">
                                                    <input type="hidden" class="form-control" name="prenom" value="{{Auth::user()->prenom}}">
                                                    <input type="hidden" class="form-control" name="email" value="{{Auth::user()->email}}">
                                                    <textarea name="comment" class="form-control description text-center" id="" cols="20" rows="6"></textarea>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Les Rendez-vous du Jour</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    Poster vos commentaires
                                                </button>
                                                </label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="" class="flot-chart-sts flot-chart curved-chart-statistic table-responsive-xl table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table-condensed">
                                <tr style="color:white;">>
                                    <th>Rendez-vpous</th>
                                    <th>Heure</th>
                                    <th>Email</th>
                                    <td>Profils</td>
                                    <th></th>
                                    <th><span class="text-danger">Options</span></th>
                                </tr>
                                @foreach($user_carre as $recup)
                                @foreach($recup->users as $r)
                                @if($recup->heure != '' AND $recup->date != '')
                                <tr style="color:white;">
                                    
                                    <td>
                                    <p>Vous avez un rendez-vous avec Mr/Mme</p>
                                        <h5>{{$r->prenom}} {{$r->name}}</h5>
                                    </td>
                                    <td>
                                     a {{$recup->heure}}
                                    </td>
                                    <td>{{$r->email}}</td>
                                    <td><img src="{{asset('storage/'.$r->images)}}" alt="" style="width:40px;border-radius:100%;margin-right:20px;margin-left:10px;" /></td>
                                    <!-- <td>{{$r->adresse}}</td> -->
                                    <td></td>
                                    <td>
                                        <button type="submit"  onclick="event.preventDefault();document.querySelector('#form-delet-{{$recup->id}}').submit();"  name="delete" data-toggle="tooltip" title="supprimer" class="btn-xs btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        <form id="form-delet-{{$recup->id}}" action="/patient-liste/{{$recup->id}}" method="post">
                                        @csrf
                                        @method('delete') 
                                        </form>
                                    </td>
                                </tr>
                                        @endif
                                @endforeach
                                @endforeach
                            </table>
                            {{$user_carre->links()}}

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                            <h3 class="box-title">Total Inscrit</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{count($user_carre)}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Rendez-vous fixer</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{count($fixer)}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">En Traitement</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{count($rv)}}</span></li>
                            </ul>
                        </div>
                        <!-- <div class="white-box analytics-info-cs">
                            <h3 class="box-title">En Tratement</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">18%</span></li>
                            </ul>
                        </div> -->
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
                <!-- ici -->
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
                        <p>Copyright © 2020 | Disign By Ousmane Diallo KEDOUGOU.</p>
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