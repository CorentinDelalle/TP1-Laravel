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
use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;

Route::get('/', function () {
    $listeEtudiants = Etudiant::all();
    return view('liste.index', ['listeEtudiants'=>$listeEtudiants]);
});

Route::get('liste',                      [EtudiantController::class, 'index'])->name('liste.index');
Route::get('liste/{etudiant}',           [EtudiantController::class, 'show'])->name('liste.show');
Route::get('liste-create',               [EtudiantController::class, 'create'])->name('liste.create');
Route::post('liste-create',              [EtudiantController::class, 'store'])->name('liste.store');
Route::get('liste-edit/{etudiant}',      [EtudiantController::class, 'edit'])->name('liste.edit');
Route::put('liste-edit/{etudiant}',      [EtudiantController::class, 'update']);
Route::delete('liste-edit/{etudiant}',   [EtudiantController::class, 'destroy']);

//test eloquent
Route::get('query',                      [EtudiantController::class, 'query']);
Route::get('page',                       [EtudiantController::class, 'page']);