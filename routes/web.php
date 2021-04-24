<?php

use App\Models\Competence;
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
    return view('projet');
});
