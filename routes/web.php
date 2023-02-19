<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('info');
});
Route::get('/ajoutCandidat', [CandidatController::class, 'ajout']);
Route::get('/ajoutFormation', [FormationController::class, 'ajout']);

Route::post('/enregistrerCandidat', [CandidatController::class, 'enregistrer']);
Route::post('/enregistrerFormation', [FormationController::class, 'enregistrer']);

Route::get('/listeCandidat', [CandidatController::class, 'liste']);
Route::get('/listeFormation', [FormationController::class, 'liste']);

Route::get('/supprimerFormation/{id}' , [FormationController::class, 'supprimer']);
Route::get('/supprimerCandidat/{id}', [CandidatController::class, 'supprimer']);

Route::get('/supprimerReferentiel/{id}', [ReferentielController::class, 'supprimer']);
Route::get('/ajoutReferentiel', [ReferentielController::class, 'ajout']);
Route::get('/listeReferentiel', [ReferentielController::class, 'liste']);
Route::post('/enregistrerReferentiel', [ReferentielController::class, 'enregistrer']);
Route::post('/modifierReferentiel/majReferentiel/{id}', [ReferentielController::class, 'maj']);

Route::post('/modifierCandidat/majCandidat/{id}', [CandidatController::class, 'maj']);
Route::post('/modifierFormation/majFormation/{id}', [FormationController::class, 'maj']);

Route::get('/modifierCandidat/{id}', [CandidatController::class, 'modifier']);
Route::get('/modifierFormation/{id}', [FormationController::class, 'modifier']);
Route::get('/modifierReferentiel/{id}', [ReferentielController::class, 'modifier']);

Route::get('/plus/{id}', [CandidatController::class, 'detail']);
Route::post('/plus/ajoutF/{id}', [CandidatController::class, 'ajoutFormation']);
Route::get('/info/{id}', [ReferentielController::class, 'info']);
Route::get('/plusReferentiel/{id}', [FormationController::class, 'detail']);
Route::post('/plusReferentiel/ajoutR/{id}', [FormationController::class, 'ajoutReferentiel']);

Route::get('/dashboard', [DashboardController::class, 'go']);