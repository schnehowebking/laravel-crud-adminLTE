<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\AutorepliesController;
use App\Http\Controllers\UsercampaignsController;
use App\Http\Controllers\UserAccountController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
