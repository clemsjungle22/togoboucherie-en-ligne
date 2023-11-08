
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
      <img src="{{ asset('index/img/boucherie.png') }}" alt="">
    </a>

    <!-- Ajout de classes Bootstrap pour la navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto"> <!-- Utilisation de ml-auto pour pousser les éléments vers la droite sur les écrans larges -->
          <li class="nav-item dropdown">
            <a href="/mybox" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <span>Viandes-Volailles</span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/mybox">Tout</a></li>
              @foreach ($categories as $category_volaille)
              <li><a href="{{ route('voir_produits_par_cat', ['id' => $category_volaille->id]) }}">{{ $category_volaille->nom }}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="/mybox2" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <span>Poissons-Fruits de Mer</span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/mybox2">Tout</a></li>
              @foreach ($categorie as $category_produit_mers)
              <li><a href="{{ route('voir_produits_mers_par_cat', ['id' => $category_produit_mers->id]) }}">{{ $category_produit_mers->nom }}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item"><a href="/modals" class="nav-link">Comment ça fonctionne</a></li>
          <li class="nav-item"><a href="/login" class="nav-link">Se Connecter</a></li>
          <li class="nav-item"><a href="/register" class="nav-link">S'inscrire</a></li>
        </ul>
      </div>
    </nav>
    <!-- Fin des classes Bootstrap -->

    <div class="d-flex align-items-center">
      <a class="btn btn-book-a-table" href="/box">Acheter</a>
      <a href="/panier" class="nav-link"><i class="fa fa-shopping-cart"></i>Panier{{ $totalQuantity = Cart::getTotalQuantity() }}</a>
    </div>
  </div>
</header>
