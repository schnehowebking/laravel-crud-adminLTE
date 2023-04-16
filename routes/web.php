<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\AutorepliesController;
use App\Http\Controllers\UsercampaignsController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\FrontendController;


use App\Http\Controllers\StripePaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome')->name('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/', FrontendController::class);
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/payment', [FrontendController::class, 'payment'])->name('frontend.payment');
Route::get('/pricing', [FrontendController::class, 'pricing'])->name('frontend.pricing');




//data tables
// Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit-form');
Route::resource('/lists', UserlistController::class);
// Route::get('/lists', [UserlistController::class, 'index'])->name('lists.index');
// Route::get('/lists/create', [UserlistController::class, 'create'])->name('lists.create');
// Route::post('/lists', [UserlistController::class, 'store'])->name('lists.store');
// Route::get('/lists/{list}', [UserlistController::class, 'show'])->name('lists.show');
// Route::get('/lists/{list}/edit', [UserlistController::class, 'edit'])->name('lists.edit');
// Route::put('/lists/{list}', [UserlistController::class, 'update'])->name('lists.update');
// Route::delete('/lists/{list}', [UserlistController::class, 'destroy'])->name('lists.destroy');


// autoreplies
Route::resource('/autoreplies', AutorepliesController::class);
// Route::get('/autoreplies', [AutorepliesController::class, 'index'])->name('autoreplies.index');
// Route::get('/autoreplies/create', [AutorepliesController::class, 'create'])->name('autoreplies.create');
// Route::post('/autoreplies', [AutorepliesController::class, 'store'])->name('autoreplies.store');
// Route::get('/autoreplies/{autoreply}', [AutorepliesController::class, 'show'])->name('autoreplies.show');
// Route::get('/autoreplies/{autoreply}/edit', [AutorepliesController::class, 'edit'])->name('autoreplies.edit');
// Route::put('/autoreplies/{autoreply}', [AutorepliesController::class, 'update'])->name('autoreplies.update');
// Route::delete('/autoreplies/{autoreply}', [AutorepliesController::class, 'destroy'])->name('autoreplies.destroy');



Route::resource('usercampaigns', UsercampaignsController::class);

Route::resource('useraccount', UserAccountController::class);

Route::get('/billing', function () {
    return view('backend.account.billing');
})->name('billing');



Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
