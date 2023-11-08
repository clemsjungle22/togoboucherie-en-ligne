@extends('master')
@section('context')
<section>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
<section id="hero" class="d-flex align-items-center" style="background-image: url('{{asset('modal/img/heros.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: #f8f8f8; position: relative; overflow: hidden; height: 80vh;">
  <div class="container">
    <div class="row gy-4">
  
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
      <h1 style="font-size: 36px; font-weight: bold; color: white; font-family: 'Playfair Display SC', serif; text-align: left; margin-left: -50px;">Comment ça </br>fonctionne</h1>
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
<section>
<!-- Deuxième section superposée -->
<section style="position: absolute; top: 60vh; left: 0; width: 100%; height: 100vh; z-index: 2;">
<style>
    /* Style pour la section de la grille */
    .image-container {
    max-width: 1200px; /* Largeur maximale du conteneur (ajustez selon vos besoins) */
    margin: 0 auto; /* Centrer le conteneur */
    padding: 20px; /* Espacement interne (ajustez selon vos besoins) */
    max-height: 1200px; /* Hauteur maximale du conteneur (ajustez selon vos besoins) */
    }


    /* Style pour le cadre qui englobe les icônes et les légendes */
    .icon-container {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 20px;
        text-align: center;
        display: flex; /* Affichage en ligne */
        justify-content: space-between; /* Espacement égal entre les icônes */
    }

    /* Style pour chaque icône */
    .image-item {
        position: relative;
        text-align: center; /* Centrer le texte sous l'icône */
    }

    /* Style pour la légende de l'icône */
    .image-caption {
        margin-top: 10px; /* Espacement entre l'icône et la légende */
    }

    /* Style pour l'icône depuis Google Fonts */
    .image-item i {
        font-size: 48px; /* Taille de l'icône */
        line-height: 1.5; /* Espacement entre l'icône et le texte */
    }
</style>

<div class="image-container">
    <section class="image-grid">
        <div class="icon-container">
            <div class="image-item">
                <i class="material-icons">verified_user</i>
                <div class="image-caption">APPROVISIONNEMENT FIABLE</br></br>Nous nous approvisionnons auprès de </br>partenaires qui partagent nos normes</br> élevées de qualité.</div>
            </div>
            <div class="image-item">
                <i class="material-icons">card_giftcard</i>
                <div class="image-caption">FLEXIBILITÉ TOTALE</br></br>Vous choisissez votre box </br> votre fréquence de livraison.</div>
            </div>
            <div class="image-item">
                <i class="material-icons">local_shipping</i>
                <div class="image-caption">LIVRAISON GRATUITE</br></br>Nous expédions</br> votre commande,congelée pour plus</br> de fraîcheur et emballée dans</br> une boîte écologique.</div>
            </div>
            <div class="image-item">
                <i class="material-icons">restaurant</i>
                <div class="image-caption">CUISINEZ EN TOUTE</br> CONFIANCE</br></br> Vous profitez d'une viande de</br> haute qualité livrée à votre</br> porte.</div>
            </div>
            <!-- Ajoutez plus d'icônes au besoin -->
        </div>
       
    </section>
</div>
</section>

    <h1 style="text-align:center; margin-top: 100px; font-family: 'Playfair Display SC', serif;">Nos Offres</h1>

</div>

  <section id="why-uses" class="why-uses section-bg" style="padding: 300px;">
    <div class="container">
  
      <div class="row gy-4">
  
        <div class="col-lg-8 d-flex align-items-center">
          <div class="row gy-4">
  
            <div class="col-xl-4" data-aos-delay="200">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center custom-icon-box">
              <i class="bi bi-box" style="margin-top: -80px;"></i>
  
                <h4><strong>Boîte Prédéfinie</strong></h4>
                <p>Explorez des possibilités infinies pour le dîner avec nos sélections spécialement sélectionnées de viandes de haute qualité. Chaque boîte est l'occasion d'essayer quelque chose de nouveau tout en dégustant quelques favoris éprouvés.</p>
                <div style="display: flex; justify-content: center; gap: 20px;">
  
                <div style="display: flex; flex-direction: column; align-items: center; text-align: center; border: 1px solid #ccc; padding: 10px; margin: 10px; border-radius: 8px;">
      <h4 style="font-size: 20px; margin-bottom: 10px;"><strong>Coffret classique</strong></h4>
      <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>146 $ la boîte</p>
      <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>8 à 11 livres de viande</p>
  </div>
  
  
  <div style="display: flex; flex-direction: column; align-items: center; text-align: center; border: 1px solid #ccc; padding: 10px; margin: 10px; border-radius: 8px;">
      <h4 style="font-size: 20px; margin-bottom: 10px;"><strong>Grosse boite</strong></h4>
      <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>269 $ par boîte</p>
      <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>16-22 livres de viande</p>
  </div>
  
  </div>
      <div style= "display: flex padding: 40px;">
          <a href="/mybox" class="btn btn-danger btn-sm mr-2 d-inline" style="margin-right: 28px;">Faites Votre Choix</a>
          <a href="/" class="btn btn-danger btn-sm d-inline">Faites Votre Choix</a>
  </div>
              </div>
            </div><!-- End Icon Box -->
  
            <div class="col-xl-4" data-aos-delay="300">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center custom-icon-box">
              <i class="bi bi-gift" style="margin-top: -100px;"></i>
  
                <h4><strong>Boîte personnalisée</strong></h4>
                <p>Créez le mélange parfait de coupes pour votre style de vie. Des steaks pour un rendez-vous en amoureux aux poitrines de poulet pour la préparation des repas, nous avons ce qu'il vous faut. Choisissez parmi plus de 25 coupes.</p>
                <div style="display: flex; justify-content: center; gap: 20px;">
  
    <div style="display: flex; flex-direction: column; align-items: center; text-align: center; border: 1px solid #ccc; padding: 10px; margin: 10px; border-radius: 8px;">
      <h4 style="font-size: 20px; margin-bottom: 10px;"><strong>Coffret classique</strong></h4>
      <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>169 $ la boîte</p>
      <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>9 à 14 livres de viande</p>
    </div>
  
    <div style="display: flex; flex-direction: column; align-items: center; text-align: center; border: 1px solid #ccc; padding: 10px; margin: 10px; border-radius: 8px;">
    <h4 style="font-size: 20px; margin-bottom: 10px;"><strong>Grosse boite</strong></h4>
    <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>306 $ par boîte</p>
      <p style="color: #b91d47; font-size: 18px; text-align: left;"><strong style="font-size: 30px;">.</strong>18-26 livres de viande</p>
    </div>
  
  </div>
  <div style= "display: flex padding: 40px;">
          <a href="/" class="btn btn-danger btn-sm mr-2 d-inline" style="margin-right: 28px;">Faites Votre Choix</a>
          <a href="/" class="btn btn-danger btn-sm d-inline">Faites Votre Choix</a>
  </div>
  
  
  
              </div>
            </div><!-- End Icon Box -->
          </div>
        </div>
      </div>
  
    </div>
  </section>
  
  <style>
    /* Styles pour rendre les éléments réactifs */
    @media (max-width: 768px) {
      .custom-icon-box {
        text-align: center;
        margin-bottom: 20px;
      }
  
      .custom-icon-box i {
        font-size: 40px;
        margin-top: 0;
      }
    }
  
    @media (min-width: 769px) {
      .custom-icon-box {
        text-align: left;
      }
  
      .custom-icon-box i {
        font-size: 60px;
      }
    }
  
    /* Styles pour améliorer l'apparence */
    .custom-icon-box {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  
    .custom-icon-box h4 {
      font-size: 18px;
      margin: 10px 0;
    }
  
    .custom-icon-box p {
      font-size: 14px;
      color: #555;
    }
  
    .custom-icon-box a.btn {
      margin-top: 20px;
    }
  </style>
  


</section>
  







@endsection
