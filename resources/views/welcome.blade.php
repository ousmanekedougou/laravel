<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MaSanté</title>
    <link rel="stylesheet" href="{{asset('img2')}}">
    <link rel="stylesheet" href="{{asset('fonts2')}}">
    <link rel="icon" href="img2/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css2/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css2/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css2/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css2/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css2/flaticon.css')}}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('css2/magnific-popup.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('css2/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css2/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css2/style.css')}}">
    <link rel="stylesheet" href="{{asset('css2/app.css')}}">
</head>
<style>
  /* le footer */
  .red {
  color: red !important;
}

footer {
  background-color: #f5f5f5;
  padding: 80px 0;
}
footer .footer-widget h3 {
  margin-bottom: 30px;
}
footer .contact-link {
  display: inline-block;
  width: 100%;
  color: #333;
}
footer .footer-social ul {
  padding-left: 0;
}
footer .footer-social ul li {
  list-style: none;
  float: left;
  padding: 0 10px;
}
footer .footer-social ul li:first-child {
  padding-left: 0;
}
footer .footer-social ul li a {
  font-size: 20px;
  color: #333;
}
footer .footer-social ul li a:hover {
  color: red;
}
footer .opening-time {
  padding-left: 0;
}
footer .opening-time li {
  list-style: none;
}
footer .opening-time li span {
  float: left;
  padding-right: 10px;
}
footer .opening-time li span .fa-times {
  color: red;
}
footer .opening-time li strong {
  color: red;
}
footer .media-body a {
  color: #333;
}
footer .media-body a:hover {
  color: red;
}
footer .media-body span {
  color: #969696;
}
footer .images-gellary ul {
  padding-left: 0;
}
footer .images-gellary ul li {
  list-style: none;
  float: left;
  margin: 0 3% 2% 0;
  width: 31%;
  position: relative;
}
footer .images-gellary ul li:nth-child(3n) {
  margin: 0 0 1%;
}
  /* fin du footetr */

</style>
<body class="container">
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<!-- <script>
   tinymce.init({
       selector:'textarea.description',
       width: 575,
       height: 230
   });
</script> -->
    
    <!-- Debut du carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom: -70px;margin-top:12px;">
            <!-- debut du header -->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href=""> <img src="img2/logo2.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent" >
                            @if (Route::has('login'))
                            <ul class="navbar-nav align-items-center">
                            @auth
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            @else
                                <li class="nav-item active">
                                    <a class="nav-link" href="">Acceuil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login-medecin') }}">Medecin</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Patients
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('login') }}">Connexion</a>
                                        <a class="dropdown-item" href="{{ route('register') }}">Inscription</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#comment">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">learn more</a>
                                </li>
                                @endauth
                            </ul>
                            @endif
                        </div>


                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 responsive img2" src="img2/1.webp" alt="First slide" style="height:400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 responsive img2" src="img2/2.webp" alt="Second slide" style="height:400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 responsive img2" src="img2/3.webp" alt="Third slide" style="height:400px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- fin du carousel-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_feature_text ">
                        <h2>Quelques Services de la maison</h2>
                        <h6>Sur quelle base se fonde la relation patient-médecin? </h6>
                        <p>Juridiquement, on estime que consulter un médecin revient, 
                        pour le patient, à lui donner un mandat, celui d’être soigné. 
                        De son côté, le médecin s’engage alors à fournir les soins 
                        adéquats en fonction de l’état de santé de son patient. Il 
                        ne promet pas un résultat - sa guérison - mais s’engage à agir 
                        avec diligence en lui prodiguant les soins et les conseils nécessaires. 
                        Concrètement, le médecin doit faire tout son possible pour soigner son 
                        patient conformément aux règles de l’art medical. Mais si, malgré ses 
                        efforts, le traitement reste sans effet ou s’avère insuffisant, il ne 
                        pourra pas en être tenu pour responsable, à moins qu’il ait commis une erreur médicale.</p>
                        <!-- <a href="#" class="btn_2">All services</a> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="feature_item">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_feature">
                                    <div class="single_feature_part">
                                        <span class="single_feature_icon"><img src="img2/icon/feature_1.svg"
                                                alt=""></span>
                                        <h4>Dentaire</h4>
                                        <p>Encore plus proche de vous, veille à la santé de la bouche, des dents et des gencives des Senegalais est notre preocupation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_feature">
                                    <div class="single_feature_part">
                                        <span class="single_feature_icon">
                                            <img src="img2/ch2.jpeg"
                                                alt="" style="width: 100px;border-radius:100%" class=""></span>
                                        <h4>chirurgie cardiaque</h4>
                                        <p>La chirurgie cardiaque ou chirurgie cardiovasculaire est une spécialité chirurgicale 
                                            traitant les affections du cœur et des gros vaisseaux thoraciques.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_feature">
                                    <div class="single_feature_part">
                                        <span class="single_feature_icon"><img src="img2/epath.jpeg"
                                                alt=""></span>
                                        <h4> L’hépatologie</h4>
                                        <p>La gastro-entérologie se consacre à l'étude de l'appareil digestif 
                                            et de son traitement. Elle traite les organes 
                                            (oesophage, estomac, intestin grêle, gros intestin, rectum, anus).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_feature">
                                    <div class="single_feature_part">
                                        <span class="single_feature_icon"><img src="img2/pediatrie.jpeg"
                                                alt="" style="width: 100px;border-radius:100%;"></span>
                                        <h4>Pédiatrie</h4>
                                        <p>Retrouver le spécialiste des enfants, qui est considéré comme le médecin généraliste des enfants.
                                            Pour avoire un diagnostic et un traitement en toute scurite
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our_ability part start-->
    <section class="our_ability section_padding mt-0">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="our_ability_img">
                        <img src="img2/ability_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="our_ability_member_text">
                        <h2>Nos patients sont au centre de tout ce que nous faisons</h2>

                            <p>« l’implication du patient dans la protection et
                                l’amélioration de sa propre santé est vitale, vu que
                                l’exposition à des risques pour la santé dépend largement
                                du comportement des individus. »
                                Le médecin doit être un bon « communicateur »
                                pour accompagner les patients et les familles dans
                                leur responsablilité à adopter des comportements
                                qui leur seront bénéfiques pour la santé
                            </p>
                        <ul>
                            <li><span class="ti-mouse"></span>Technologie moderne</li>
                            <li><span class="ti-heart-broken"></span>Installations de classe mondiale</li>
                            <li><span class="ti-package"></span>Infirmière expérimentée</li>
                            <li><span class="ti-headphone-alt"></span>Assistance 24h / 24</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_ability part end-->



    <!--::regervation_part start::-->
    <section class="regervation_part" id="comment">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7 col-md-6">
                    <div class="regervation_part_iner">
                        <form action="{{route('comment')}}" method="POST">
                            @csrf
                            <h2>Votre Commentaitre</h2>
                            @if(session('success'))
                                <p class="alert alert-success">{{session('success')}}</p>
                            @endif
                            <div class="form-row">
                                <p>Merci de nous faire part de vos questions ou suggestions </p>
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Nom et Prenom">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="inputPassword4"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="comment" class="form-control description" id="Textarea" rows="4"
                                        placeholder="Votre message "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn row">
                                <div class="col-sm-6">
                                <button type="submit" class="regerv_btn_iner btn btn-primary btn-block" >Envoyer</button>
                                </div>

                                <div class="col-sm-6">
                                <button type="reset" style="background-color:green;" class="regerv_btn_iner btn btn-success btn-block" >Reinitialiser</button>
                                </div>
                            </div><br>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <!-- <img src="img2/reservation.png" alt=""> -->
                        <img src="img2/m12.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

 

    <!-- footer part start-->
    <footer class="footer mt-4 pb-0 mb-4 pt-1">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="footer-widget">
          <h3>Restez en contact</h3>
          <div class="footer-widget-content">
            <a href="mailto:sales@example.com" class="contact-link">masante@hotmail.com</a>
            <a href="mailto:support@example.com" class="contact-link red"> clinique@gmail.com.com </a>
            <a href="tel:0121234" class="contact-link">(221) 33-889-56-98</a>
            <div class="footer-social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Derniers évènements</h3>
        <div class="footer-widget-content">
          <div class="media">
              <div class="media-left">
                 <a href="#"><img style="width:70px;" class="media-object mr-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRYTR32NdGRWoIBm-cPfNdrUCkRlDp_dgccXfdGW34r2gjC1L6W" alt="..."></a>
              </div>
              <div class="media-body">
                 <span>Decembre 23, 2019 </span>
                 <p><a href="#">Depistage Gratuite </a></p>
              </div>
           </div>
          <div class="media">
              <div class="media-left">
                 <a href="#."><img style="width:70px;" class="media-object mr-4" src="data:image/jpeg;base64,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" alt="..."></a>
              </div>
              <div class="media-body">
                 <span>September 30, 2019 </span>
                 <p><a href="#">Dont de sans </a></p>
              </div>
           </div>
        </div>
        </div>
      </div>
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Heure d'ouverture</h3>
        <div class="footer-widget-content">
        <div class="open-time ">
          <ul class="opening-time">
            <li><span><i class="fa fa-times"></i></span><p class="clock-time"><strong>monday :</strong> closed</p>
             </li>
            <li><span><i class="fa fa-check"></i></span><p><strong>tue-fri :</strong> 8am - 12am</p></li>
            <li><span><i class="fa fa-check"></i></span><p><strong>sat-sun :</strong> 7am - 1am</p></li>
            <li><span><i class="fa fa-check"></i></span><p><strong>holydays :</strong> 12pm-12am</p></li>
          </ul>
           </div>
        </div>
        </div></div>
      
      <div class="col-sm-3">
      <div class="footer-widget">
        <h3>Gallerys</h3>
        <div class="footer-widget-content">
          <div class="images-gellary">
            <ul>
              <li><a href="#"><img src="img2/genicologie.png" alt="Ginecologie"></a></li>
              <li><a href="#"><img src="img2/inefto.jpeg" alt="Ifecthologie"></a></li>
              <li><a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLQPsR5EgVTyLvr8XPASUTraDmMbVIVvz4YLhJ8k6sNRAkYMoS" alt="Ondologie"></a></li>
              <li><a href="#"><img src="img2/radiologie.jpeg" alt="Radiologie"></a></li>
              <li><a href="#"><img src="data:image/jpeg;base64,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" alt="Rhumatologie"></a></li>
              <li><a href="#"><img src="data:image/jpeg;base64,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" alt="L'urologie"></a></li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- 
autor: Marco Barría 
https://twitter.com/marco_bf
-->

    <!-- footer part end-->
    <!-- jquery plugins here-->

    <script src="{{asset('js2/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js2/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js2/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('js2/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js2/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js2/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js2/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js2/slick.min.js')}}"></script>
    <script src="{{asset('js2/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js2/waypoints.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('js2/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js2/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js2/mail-script.js')}}"></script>
    <script src="{{asset('js2/contact.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js2/custom.js')}}"></script>
    <script src="{{asset('js2/app.js')}}"></script>
    
</body>

</html>