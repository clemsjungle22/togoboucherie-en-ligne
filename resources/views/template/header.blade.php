<header>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <svg  width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <!-- Balise d'image insérée -->
                    <image xlink:href="{{asset('index/img/boucherie.png')}}" x="-7" y="-8" width="50" height="50" />
                  </svg>
                  
                <strong>Togo Boucherie en-ligne</strong>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/panier"><i class="fa fa-shopping-cart"></i> Panier {{$totalQuantity = Cart::getTotalQuantity()}}</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-red">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($categories as $category_volaille )
                <li class="nav-item">
                    <a class="nav-link" 
            href="{{route('voir_produits_par_cat',['id'=>$category_volaille->id])}}">{{$category_volaille->nom}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>