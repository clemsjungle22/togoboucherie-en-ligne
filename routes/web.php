<?php

use App\Http\Controllers\BackPanel\AdminController;
use App\Http\Controllers\BackPanel\VendorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\MainController;
use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
/*se
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/mybox',[MainController::class, 'mybox']);
Route::get('/produit/{id}',[MainController::class, 'produit'])->name('voir_produit'); 
Route::get('/categorie_volaille/{id}',[MainController::class, 'categorie_volaille'])->name('voir_produits_par_cat');
Route::post('/panier/add/{id}', [CartController::class, 'add'])->name('cart_add');
Route::get('/panier',[CartController::class, 'index'])->name('cart_index');
Route::get('/cart/remove/{id}',[CartController::class, 'remove'])->name('cart.remove');
Route::get('/mybox2',[MainController::class, 'mybox2']); 
Route::get('/produit_mers/{id}',[MainController::class, 'produit_mers'])->name('voir_produit_mer');
Route::get('/category_produit_mers/{id}',[MainController::class, 'category_produit_mers'])->name('voir_produits_mers_par_cat');
Route::get('/', [MainController::class, 'index']);
Route::get('/modals',[MainController::class, 'modals']);
Route::get('/box',[MainController::class, 'box']);
Route::get('/choix_personnalise',[MainController::class, 'choix_personnalise']);
Route::get('/choix_predefini',[MainController::class, 'choix_predefini']);
Route::get('/produit_personnalise',[MainController::class, 'produit_personnalise']);
Route::get('/produit_personnalise_grosse', [MainController::class, 'produit_personnalise_grosse']);
Route::get('/produit_predefini_grosse', [MainController::class, 'produit_predefini_grosse']);
Route::get('/produit_predefini_classique', [MainController::class, 'produit_predefini_classique']);
Route::get('/personnalise_detail/{id}', [MainController::class, 'personnalise_detail'])->name('voir_personnalise');
Route::get('/personnalise_grosse_detail/{id}', [MainController::class, 'personnalise_grosse_detail'])->name('voir_personnalise_grosse');
Route::get('/predefini_classique_detail/{id}', [MainController::class, 'predefini_classique_detail'])->name('voir_predefini_classique');
Route::get('/predefini_grosse_detail/{id}', [MainController::class, 'predefini_grosse_detail'])->name('voir_predefini_grosse');
Route::get('/admin_master',[MainController::class, 'admin_master']);
Route::view('/example-page','example-page');
Route::view('/example-auth','example-auth');

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function () {
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
Route::view('/settings','back.pages.settings')->name('settings');
});

Route::middleware(['auth','role:vendor'])->group(function () {
    Route::get('vendor/dashboard', [VendorController::class, 'dashboard']);
    });

