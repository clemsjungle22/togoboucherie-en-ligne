@extends('master')

@section('context')

<section>
<main role="main">
    <section class="py-5">
        <div class="container">
            @if(session()->has('succès'))
                <div class="alert alert-success">
                    {{ session('succès') }}
                </div>
            @endif

            <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Votre panier </span></h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Qte</th>
                            <th>P.U</th>
                            <th>Total TTC</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($content as $produit)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img width="110" class="rounded-circle img-thumbnail mr-3" src="{{ asset('sel/produit_personnalise/' . $produit->attributes['photo']) }}" alt="">
                                    <div>
                                        {{ $produit->name }}
                                        <a href="{{ route('cart.remove', $produit->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit du panier ?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center">
                                    <input id="qte" class="form-control col-sm-4 mr-2" type="number" value="{{$produit->quantity}}">
                                    <a href="#" class="pl-2"><i class="fas fa-sync"></i></a>
                                </div>
                            </td>
                            <td>
                                {{$produit->price}}
                            </td>
                            <td>
                                {{$produit->price * $produit->quantity}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>Total TTC</td>
                            <td>{{$total_ttc_panier}}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <a class="btn btn-block btn-outline-dark" href="">Commander</a>
        </div>
    </section>
</main>
</section>

@endsection
