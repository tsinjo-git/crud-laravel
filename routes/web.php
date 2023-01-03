<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/' , [ArticlesController::class , "articles"]);
Route::get('/formulaire' , [ArticlesController::class , "formulaire"]);
Route::post('/enregistrer' , [ArticlesController::class , "formpost"]);
Route::get('/{article}', [ArticlesController::class , "open"]);
// Retourne la page editer
Route::get('/{article}/editer' , [ArticlesController::class , "editer"]);
// Modifier les données
Route::put('/{article}/update' , [ArticlesController::class , "update"]);
// Supprimer un donnée
Route::delete('/{article}/delete', [ArticlesController::class , "delete"]);
