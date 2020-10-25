<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('home');;

// Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');

Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'durand@chezlui.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});


// Route::get('infos', function () {
//     return view('infos');
// });
 
// Route::get('article/{n}', function($n) {
//     return view('article')->with('numero', $n);
// })->where('n', '[0-9]+');

// Route::get('facture/{n}', function($n) {
//     return view('facture')->withNumero($n);
// })->where('n', '[0-9]+');


