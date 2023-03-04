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
    return view('liste.index', ['listeEtudiants' => $listeEtudiants]);
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

use App\Http\Controllers\UserController;

Route::get('registration', [UserController::class, 'create'])->name('user.create');
Route::post('registration', [UserController::class, 'store'])->name('user.store');

use App\Http\Controllers\CustomAuthController;

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'authentication'])->name('login.authentication');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

use App\Http\Controllers\ForumPostController;

Route::get('forum', [ForumPostController::class, 'index'])->name('forum.index')->middleware('auth');
Route::get('forum/{forumPost}', [ForumPostController::class, 'show'])->name('forum.show')->middleware('auth');
Route::get('forum-create', [ForumPostController::class, 'create'])->name('forum.create')->middleware('auth');
Route::post('forum-create', [ForumPostController::class, 'store'])->name('forum.store')->middleware('auth');
Route::get('forum-show-user-posts', [ForumPostController::class, 'showUserPosts'])->name('forum.user-posts')->middleware('auth');
Route::get('forum-edit/{forumPost}', [ForumPostController::class, 'edit'])->name('forum.edit')->middleware('auth');
Route::put('forum-edit/{forumPost}', [ForumPostController::class, 'update'])->middleware('auth');
Route::delete('forum-show-user-posts-destroy/{forumPost}', [ForumPostController::class, 'destroy'])->name('forum.destroy')->middleware('auth');

use App\Http\Controllers\LocalizationController;
Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

