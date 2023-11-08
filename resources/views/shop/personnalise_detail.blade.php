@extends('master')
@section('context')
<section>
    <main role="main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card box-shadow">
                        <img class="card-img-top img-fluid" src="{{ asset('sel/produit_personnalise/' . $produits->photo_principale) }}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1 class="jumbotron-heading">{{ $produits->nom }}</h1>
                    <h5>29.00 €</h5>
                    <p class="lead text-muted">{{ $produits->description }}</p>
                    <hr>
                    <form action="{{ route('cart_add',['id'=>$produits->id]) }}" method="POST" id="panier_add" >
                        @csrf
                        <input type="number" name="qty" value="1">
                        
                    </form>
                        <!-- autres champs du formulaire -->
                    <button type="submit" form="panier_add" class="btn btn-danger my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</button>
                    
                    
                </div>
            </div>
        </div>

        <div class="album py-5 bg-light">
            <div class="container">
                <h3 class="text-center">Vous aimerez aussi :</h3>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col-md-4">
                        <div class="card box-shadow">
                            <img src="{{ asset('sel/produits/hulk.jpg') }}" class="card-img-top img-fluid" alt="Responsive image">
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
                        <div class="card box-shadow">
                            <img src="{{ asset('sel/produits/krusty_simpsons.jpg') }}" class="card-img-top img-fluid" alt="Responsive image">
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
                        <div class="card box-shadow">
                            <img src="{{ asset('sel/produits/star_trek_kirk.jpg') }}" class="card-img-top img-fluid" alt="Responsive image">
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
