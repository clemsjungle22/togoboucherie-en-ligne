<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Togo Boucherie - en Ligne</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="{{asset('index/img/boucherie.png')}}" rel="icon"style="width:200px;">
  <link href="{{asset('index/img/boucherie.png')}}" rel="apple-touch-icon" style="width:200px;">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
 

  <!-- Vendor CSS Files -->
  
  <link href="{{asset('index/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('index/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('index/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->

  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
  
      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="{{ asset('index/img/boucherie.png') }}" alt="">
      </a>
  
      <!-- Ajout de classes Bootstrap pour la navigation -->
      <nav id="navbar" class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto"> <!-- Utilisation de ml-auto pour pousser les éléments vers la droite sur les écrans larges -->
            <li class="nav-item dropdown">
              <a href="/mybox" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span>Viandes-Volailles</span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="/mybox">Tout</a></li>
                @foreach ($categories as $category_volaille)
                <li><a href="{{ route('voir_produits_par_cat', ['id' => $category_volaille->id]) }}">{{ $category_volaille->nom }}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="/mybox2" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span>Poissons-Fruits de Mer</span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="/mybox2">Tout</a></li>
                @foreach ($categorie as $category_produit_mers)
                <li><a href="{{ route('voir_produits_mers_par_cat', ['id' => $category_produit_mers->id]) }}">{{ $category_produit_mers->nom }}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item"><a href="/modals" class="nav-link">Comment ça fonctionne</a></li>
            <li class="nav-item dropdown">
                <span class="user-name" >
                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                </span>
                <ul class="dropdown-menu">
                    <li><form method="POST" action="{{ route('logout') }}">
                        @csrf<a href="{{route('logout')}}"  onclick="event.preventDefault();
                        this.closest('form').submit();">Se Decconnecter</a></a></li>
                    <li><a href="/mybox2">Profile</a></form></li>
                </ul>
            </li>
            
            
          </ul>
        </div>
      </nav>
      <!-- Fin des classes Bootstrap -->
  
      <div class="d-flex align-items-center">
        <a class="btn btn-book-a-table" href="/box">Acheter</a>
        <a href="/panier" class="nav-link"><i class="fa fa-shopping-cart"></i>Panier{{ $totalQuantity = Cart::getTotalQuantity() }}</a>
      </div>
    </div>
  </header>
  
  <!-- ======= Container ======= -->

  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">"Profitez de votre santé<br>grâce à une viande Bio."</h2>
          <p data-aos="fade-up" data-aos-delay="100">Viande de haute qualité. Élevé de manière éthique. Goût incroyable. Livré à votre porte.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/box" class="btn-book-a-table">Choisissez votre plan</a>
            <a href="#book-a-table" class="btn-book-a-table" style="background-color: green; color: white;">Premium</a>
          </div>
          

        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{asset('index/img/hero-img.jpg')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Ce Que Nous <span>Livrons</span></p>
          <h2>Lorsque vous nous rejoignez, vous rejoignez une communauté axée sur le souci des animaux et de notre planète, sur l'amélioration des moyens de subsistance des agriculteurs et sur le partage de meilleurs repas ensemble.</h2>
        
        </div>
        <section id="why-us" class="why-us section-bg">
          <div class="section-header text-center">
            <div class="container" data-aos="fade-up">
              <div class="row gy-4">
                <!-- Why Box 1 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4 custom-margin" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box why-box">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <i class="bi bi-shield-check"></i>
                      <h4>VIANDE DE HAUTE QUALITÉ</h4>
                      <p>Bœuf 100 % nourri à l'herbe, poulet biologique fermier, porc élevé sans cruauté et fruits de mer sauvages.</p>
                    </div>
                  </div>
                </div>
        
                <!-- Why Box 2 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4 custom-margin" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box why-box">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <i class="bi bi-cash-stack"></i>
                      <h4>VALEUR IMBATTABLE</h4>
                      <p>En plus de vous offrir des aliments naturels, nos prix concurrencent le marché actuel.</p>
                    </div>
                  </div>
                </div>
        
                <!-- Why Box 3 -->
                <div class="col-12 col-sm-6 col-md-4 mb-4 custom-margin" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box why-box">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <i class="bi bi-truck"></i>
                      <h4>FLEXIBILITÉ TOTALE</h4>
                      <p>La livraison est toujours GRATUITE sur les premiers achats et bien plus intéressante sur nos comptes prémiums.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        
       
        
        
        
    
    <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200" style="margin-top: -43px;">
    <a href="#book-a-table" class="btn-book-a-table" style="background-color: green; color: white; border-radius: 40px; padding: 10px 20px; margin-top: -20px; position: relative; overflow: hidden; animation: bounceAndShake 1s infinite;">
  Optez pour la livraison gratuite
  <style>
    @keyframes bounceAndShake {
      0%, 100% {
        transform: translateY(0);
      }
      25% {
        transform: translateY(-10px) translateX(-5px); /* Rebond vers le haut et vers la gauche */
      }
      50% {
        transform: translateY(0); /* Rebond à la position initiale */
      }
      75% {
        transform: translateY(-5px) translateX(5px); /* Rebond vers le haut et vers la droite */
      }
    }
  </style>
</a>
</div>


    

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <hr class="horizontal-line" style="height: 2px; background-color: #eee;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-center" style="font-size: 1rem; color: red;">
            <strong>Nos Box Personnalisés</strong>
            <a href="/choix_personnalise" style="color: red; margin-left: 20px; cursor: pointer; text-decoration: none;">
              Voir plus
              <i class="fas fa-plus-circle"></i>
            </a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <hr class="horizontal-line" style="height: 2px; background-color: #eee;">
        </div>
      </div>
    </div>
    

  <div class="container" data-aos="fade-up">
    <div class="img d-flex justify-content-center align-items-center">
      <div class="slider">
        <img src="{{asset('index/img/hero-img.jpg')}}" alt="">
        <img src="{{asset('index/img/alt.jpg')}}" alt="">
      </div>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <hr class="horizontal-line" style="height: 2px; background-color: #eee;">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p class="text-center" style="font-size: 1rem; color: red;">
        <strong>Nos Box Prédéfinies</strong>
        <a href="/choix_predefini" style="color: red; margin-left: 20px; cursor: pointer; text-decoration: none;">
          Voir plus
          <i class="fas fa-plus-circle"></i>
        </a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <hr class="horizontal-line" style="height: 2px; background-color: #eee;">
    </div>
  </div>
</div>



  <div class="container" data-aos="fade-up">
    <div class="img d-flex justify-content-center align-items-center">
      <div class="slider">
        <img src="{{ asset('index/img/fam.jpg') }}" alt>
        <img src="{{asset('index/img/hero-img.jpg')}}" alt="">
      </div>
    </div>
  </div>




<style>
/* Ajuster la taille de l'image en fonction de la largeur de la section parente */
.slider {
  width: 100%;
  overflow: hidden;
  white-space: nowrap;
}

/* Animation de défilement */
.slider img {
  display: inline-block;
  width: 50%  !important; /* Ajustez la largeur en fonction de la section parente */
  height: auto; /* La hauteur s'ajustera automatiquement pour maintenir les proportions de l'image */
  transform: translateX(100%);
  animation: slide 3s linear infinite;
}

@keyframes slide {
  0% {
    transform: translateX(100%);
  }
  10% {
    transform: translateX(0%);
  }
  90% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}
</style>







   




<section id="menu" class="menu">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <p>Comment Fonctionne <span>Butcherbox</span></p>
      <h2>Nous vous aidons à nourrir au mieux votre famille</h2>
    </div>

    <!-- =======Premier fonctionnement======= -->
    <div class="row gy-4">
      <div class="col-lg-6 col-md-12 about-img" style="background-image: url({{ asset('index/img/faml.jpg') }});" data-aos="fade-up" data-aos-delay="150">
      </div>
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
        <div class="content">
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p>
        </div>
      </div>
    </div>

    <hr class="horizontal-line" style="height: 1px; background-color: #333; margin: 20px 0;">

    <!-- =======Deuxième fonctionnement======= -->
    <div class="row gy-4">
      <div class="col-lg-6 col-md-12 about-img" style="background-image: url({{ asset('index/img/box.webp') }});" data-aos="fade-up" data-aos-delay="150">
      </div>
      <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
        <div class="content">
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p>
        </div>
      </div>
    </div>

    <hr class="horizontal-line" style="height: 1px; background-color: #333; margin: 20px 0;">

    <!-- Autres sections ici... -->

  </div>
</section>


    <!-- Image box livraison -->
    

    <div style="position: relative;">
      <img src="{{ asset('index/img/box.webp') }}" style="width: 100%; height: auto;" alt="Image">
      <a href="/box" style="position: absolute; top: 100%; left: 50%; transform: translateX(-50%); background-color: var(--color-primary); color: white; padding: 10px 20px; border-radius: 40px; width: 40%; max-width: 300px; text-align: center;">Commencer votre achat</a>
  </div>
  


    <!-- ======= Chefs Section ======= -->
   <!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    

    <!-- ======= Gallery Section ======= -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
        <p>Voulez-vous de l'aide? <span>Contactez nous</span></p>
        <h2>Nos Contacts</h2>
          
        </div>

        

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

       
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= endContainer ======= -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>
    
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
    
      </div>
    </div>
    
    <div class="container">
      <div class="copyright">
      <strong><span></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Togo Boucherie en-ligne
      </div>
    </div>
    
    </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('index/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('index/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('index/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('index/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('index/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('index/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('index/js/main.js')}}"></script>

</body>

</html>