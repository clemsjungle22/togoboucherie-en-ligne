@extends('shop')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/mybox" style="margin-left: 10px;">Retour</a></li>
        <li class="breadcrumb-item"></li>
      
    </ol>
</nav>

<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                    @foreach ($produits as $produit )
                        
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                           <a href="{{route('voir_produit',['id'=>$produit->id])}}"><img src="{{asset('sel/produits/'.$produit->photo_principale)}}" class="card-img-top img-fluid" alt="{{$produit->nom}}"></a> 
                            <div class="card-body">
                                <p class="card-text">{{$produit->nom}}<br>{{$produit->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-danger">Acheter</a>

                                    <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
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