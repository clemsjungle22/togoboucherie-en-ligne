@extends('master')
@section('context')

<section>
    <main role="main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-12">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('sel/produit_predefini/'.$produits->photo_principale)}}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1 class="jumbotron-heading">{{$produits->nom}}</h1>
                    <h5>29.00 €</h5>
                    <p class="lead text-muted">{{$produits->description}}</p>
                    <hr>
                    
                   
                    <p>
                        <a href="#" class="btn btn-danger my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <h3 class="text-center">Vous aimerez aussi :</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/hulk.jpg" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/krusty_simpsons.jpg" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="produits/star_trek_kirk.jpg" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>

@endsection
