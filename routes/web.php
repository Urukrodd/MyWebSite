<?php

use App\Models\Competence;
use App\Models\Projet;
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

Route::get('/', function () {
    $comps = Competence::all();
    return view('home.home', ['comps' => $comps]);
});

Route::get('/projets', function () {
    $pros = Projet::all()
                ->where('categorie', '=', 'pro');
    $persos = Projet::all()
        ->where('categorie', '=', 'perso');
    $ecoles = Projet::all()
        ->where('categorie', '=', 'ecole');

    return view('projet', ['pros' => $pros, 'persos' => $persos, 'ecoles' => $ecoles]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
