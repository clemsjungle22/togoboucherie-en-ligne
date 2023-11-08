<?php

namespace App\Providers;

use App\Http\ViewComposers\HeaderComposer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
        view()->composer(['shop','selling'], HeaderComposer::class);
        view()->composer(['/layouts/index','/layouts/modals','/layouts/box','/layouts/choix_personnalise','/layouts/choix_predefini','/shop.produit_personnalise',
        '/shop.personnalise_detail','/shop.produit_personnalise_grosse','/shop.personnalise_grosse_detail','/shop.produit_predefini_grosse','/shop.predefini_grosse_detail',
        '/shop.produit_predefini_classique', '/shop.predefini_classique_detail', 'cart.index', 'auth.login', 'auth.register','auth.forgot-password','dashboard'], HeaderComposer::class);
    } 
}
