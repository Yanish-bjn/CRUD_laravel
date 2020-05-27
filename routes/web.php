<?php

use Illuminate\Support\Facades\Route;
use App\livre;
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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ajouter', function () {
    return view('ajouter');
});

Route::get('/modifier', function () {
    return view('modifier');
});


Route::get('/livre.supprimer', 'supprimerController@destroy')->name('supprimer');

Route::post('/Livre', function () {
    $livre = App\livre::create([
    'Nom' => request('Nom'),
    'Auteur' => request('Auteur'),
    'Date' => request('Date'),
  ]);
  return view('home');
});

Route::get('/article', function () {
  $livre = App\livre::all();
    return view('article', [
      'livre' => $livre,
    ]);
});

Route::post('/update', function () {
  auth()->user()->update([
    'Nom' => request('Nom'),
    'Auteur' => request('Auteur'),
    'Date' => request('Date'),
  ]);
  return view('home');
});
