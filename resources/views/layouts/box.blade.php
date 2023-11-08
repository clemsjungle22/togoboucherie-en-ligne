@extends('master')
@section('context')

<section id="" class="why-uses section-bg">
  <h3 style="text-align: center; margin-top: 50px;">Sélectionnez votre forfait</h3><br/>
  <h5 style="text-align: center;">Votre choix de bœuf 100 % nourri à l'herbe et fini à l'herbe ; Poulet<br/> biologique fermier ; Boeuf élevé sans cage ; et fruits de mer sauvages .</h5>

  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 50vh;">

      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card border-primary">
          <div class="card-body text-black">
            <h5 class="card-title">Forfait personnalisé</h5><br/>
            <p class="card-text">Choisissez des coupes spécifiques de tout type de viande, y compris les fruits de mer. Deux tailles disponibles, chacune avec 20 % de viande en plus que le plan Curated.</p>
            <div class="form-check">
              <a href="/choix_personnalise" class="btn btn-danger">Choisir</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card border-primary">
          <div class="card-body text-black">
            <h5 class="card-title">Forfait Prédéfini</h5><br/>
            <p class="card-text">Choisissez vos types de viande et nous sélectionnerons les coupes spécifiques, dans des formats d'emballage standard. Deux tailles disponibles.</p>
            <div class="form-check">
              <a href="/choix_predefini" class="btn btn-danger">Choisir</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

@endsection
