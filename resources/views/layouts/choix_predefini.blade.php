@extends('master')
@section('context')

<section id="" class="why-uses section-bg">
  <h3 style="text-align: center; margin-top: 50px;">Choisissez la taille de votre boîte</h3><br/>
  <h5 style="text-align: center;">Quelle que soit la taille, la livraison est toujours gratuite !<br/></h5>

  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 50vh;">

      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card border-primary">
          <div class="card-body text-black">
            <h5 class="card-title">Coffret Classique</h5>
            <strong><p class="card-text" style="color: red">10.000 FCFA</p></strong> 
            <p class="card-text">Bon pour les individus et les petites familles</p>
            <p class="card-text">8 à 11 kg de viande de haute qualité</p>
            <div class="form-check">
              <a href="/produit_predefini_classique" class="btn btn-danger">Choisir</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card border-primary">
          <div class="card-body text-black">
            <h5 class="card-title">Grosse Boite</h5>
            <strong><p class="card-text" style="color: red">19.500 FCFA</p></strong> 
            <p class="card-text">Idéal pour les familles moyennes et nombreuses</p>
            <p class="card-text">16 à 22 kg de viande de haute qualité</p>
            <div class="form-check">
              <a href="/produit_predefini_grosse" class="btn btn-danger">Choisir</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

@endsection
