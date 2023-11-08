@extends('master')
@section('context')

<main>

    <section class="py-5 text-center">
      <div class="container">
          
          <p class="lead text-muted">Vous pouvez faire le choix que vous souhaitez selon votre gouts.</p>
  
      </div>
  </section>

  <nav class="navbar navbar-expand-lg navbar-light bg-red">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
           
            </li>
        </ul>
    </div>
</nav>
  
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          {{--{{dump($produits)}}--}}
          @foreach ($produits as $produit )
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <a href="{{route('voir_predefini_classique',['id'=>$produit->id])}}"><image href="{{ asset('sel/produit_predefini/' .$produit->photo_principale) }}" class="img-fluid" width="100%" height="100%" /></a> 
              </svg>
              
              <div class="card-body">
                <p class="card-text">{{$produit->nom}} <br/> {{$produit->description}}<br/>
                  <a href=""></a>
                
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="{{route('voir_predefini_classique',['id'=>$produit->id])}}" class="btn btn-danger">Acheter</a>
  
                    <a href="{{route('voir_predefini_classique',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary" style="margin-left: 230px;"><i class="fas fa-eye"></i></a>
                </div>
                  <small class="text-body-secondary"></small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        
        </div>
      </div>
    </div>
  
  </main>
  

@endsection