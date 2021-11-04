<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditRapportsController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\RapportController;
use Illuminate\Support\Facades\Route;
use App\Models\Visiteur;
use App\Models\Rapport;
use App\Models\Offrir;

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

// GET METHODS
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout')->middleware('auth');



// RAPPORTS
Route::get('/rapports', [RapportController::class, 'index'])->middleware('auth');

Route::get('/createRapport', [RapportController::class, 'create'])->middleware('auth');
Route::post('/createRapport', [RapportController::class, 'store'])->name('create.rapports');

//Route::get('/editRapport', [EditRapportsController::class, 'index'])->middleware('auth');
Route::any('/rapports/search', [EditRapportsController::class, 'search'])->name('search.rapports')->middleware('auth');
Route::get('/rapports/edit/{id}', [EditRapportsController::class, 'viewRapport'])->middleware('auth');
Route::post('/rapports/edit/{id}', [EditRapportsController::class, 'updateRapport'])->name('update.rapport');

// SEARCH MEDECINS
//Route::get('/search', [MedecinController::class, 'index'])->middleware('auth');
Route::any('/search', [MedecinController::class, 'search'])->name('search.medecins');

// PROFILE
Route::get('/profile/{id}', [MedecinController::class, 'viewProfile'])->middleware('auth');
Route::get('/profile/{id}/rapports', [MedecinController::class, 'viewMedecinRapport'])->middleware('auth');

Route::get('/profile/{id}/edit', [MedecinController::class, 'viewUpdateProfile'])->middleware('auth');
Route::post('/profile/{id}/edit', [MedecinController::class, 'updateProfile'])->name('update.profile');

// INDEX
Route::get('/', [AuthController::class, 'index'])->name('auth');
Route::post('/', [AuthController::class, 'customLogin'])->name('login.custom');
