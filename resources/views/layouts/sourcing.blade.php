@extends('master')
@section('context')
<section>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
<section id="hero" class="d-flex align-items-center" style="background-image: url('{{asset('modal/img/nature.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: #f8f8f8; position: relative; overflow: hidden; height: 80vh;">
  <div class="container">
    <div class="row gy-4">
  
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
      <h1 style="font-size: 46px; font-weight: bold; color: white; font-family: 'Playfair Display SC', serif; text-align: left; margin-left: -50px;"><strong>Nous croyons qu'il</br> faut faire </br>ce qui est juste</strong></h1>
    </div>

      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <!-- Cette colonne est désormais vide car l'image de fond la remplace -->
      </div>
    </div>
  </div>
  <div class="floating-shapes">
    <!-- Ajouter ici les éléments flottants ou d'animation que vous souhaitez -->
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>
  </div>
</section><!-- End Hero -->

<style>
  /* Styles pour les éléments flottants */
  .floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
  }

  .circle {
    position: absolute;
    background-color: #3498db;
    border-radius: 50%;
    opacity: 0.3;
  }

  .circle1 {
    width: 100px;
    height: 100px;
    top: 10%;
    left: 10%;
    animation: float 6s infinite;
  }

  .circle2 {
    width: 60px;
    height: 60px;
    top: 50%;
    left: 50%;
    animation: float 4s infinite;
  }

  .circle3 {
    width: 80px;
    height: 80px;
    top: 90%;
    left: 80%;
    animation: float 5s infinite;
  }

  @keyframes float {
    0% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-20px);
    }
    100% {
      transform: translateY(0);
    }
  }
</style>
</section>
<p style="text-align:center;">NOTRE APPROVISIONNEMENT</br>
<h3 style="text-align:center;"><p>Nous travaillons en partenariat avec des personnes qui se consacrent<p> <p>à faire ce qu'il faut, sans jamais rogner sur les raccourcis et toujours à</p> <p>la recherche de moyens de s'améliorer. Découvrez pourquoi nous</p> <p>sommes la source fiable de protéines de haute qualité pour les</p> familles de tout le pays.</h3></p>








@endsection
