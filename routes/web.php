<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/page1', function () {
    return "coucou";
});

Route::get('/page2', function () {
    $premVar="<h1>bienvenu sur mon site </h1>";
    return $premVar;
});

// Créez une route dynamique qui renvoi "Hello" + ce qui a été écrit dans la variable de la route

Route::get('/page3', function () {
    $deuxVar="nasila";
    return "Hello ".$deuxVar;


});

Route::get('/about', function () {

    $prenom = "naz";
    $nom = "aala";
    return view("about", compact("prenom","nom"));




});



