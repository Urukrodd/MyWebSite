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
                ->where('categorie', '=', 'pro')
                ->where('actif', '=', '1');
    $persos = Projet::all()
        ->where('categorie', '=', 'perso')
        ->where('actif', '=', '1');
    $ecoles = Projet::all()
        ->where('categorie', '=', 'ecole')
        ->where('actif', '=', '1');

    return view('projet.projets', ['pros' => $pros, 'persos' => $persos, 'ecoles' => $ecoles]);
});

Route::get('/projets/{id}', function ($id) {
    $projet = Projet::find($id);
    return view('projet.projet', ['projet' => $projet]);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/ajax/sendMail', function () {
    $data = new stdClass();
    if (isset($_GET['subject']) && isset($_GET['mail']) && isset($_GET['msg'])) {
        $subject = $_GET['subject'] . ' - ' . $_GET['mail'];
        $msg = $_GET['msg'];

        try {
            mail('maxime.bernard13.pro@gmail.com', $subject, $msg, 'From:portfolio@maxime-bernard.yo.fr');
            $data->success = true;
        } catch (Exception $exception) {
            $data->success = false;
            $data->message = $exception->getMessage();
        }
    } else {
        $data->success = false;
        $data->message = "Bad arguments";
    }

//    phpinfo();

    return json_encode($data, JSON_THROW_ON_ERROR);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
