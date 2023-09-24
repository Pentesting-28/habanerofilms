<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/diego-kaplana', [FrontController::class, 'diegoKaplana'])->name('front.diego-kaplana');
Route::get('/manuel-escalante', [FrontController::class, 'manuelEscalante'])->name('front.manuel-escalante');
Route::get('/mario-mandujano', [FrontController::class, 'marioMandujano'])->name('front.mario-mandujano');
Route::get('/pablo-calvillo', [FrontController::class, 'pabloCalvillo'])->name('front.pablo-calvillo');
Route::get('/pablo-brusas', [FrontController::class, 'pabloBrusas'])->name('front.pablo-brusas');
Route::get('/ernesto-alemany', [FrontController::class, 'ernestoAlemany'])->name('front.ernesto-alemany');
Route::get('/demo-habanero', [FrontController::class, 'demoHabanero'])->name('front.demo-habanero');
Route::get('/digital-content', [FrontController::class, 'digitalContent'])->name('front.digital-content');
Route::get('/film', [FrontController::class, 'film'])->name('front.film');
Route::get('/production-services', [FrontController::class, 'productionServices'])->name('front.production-services');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/santiago-ruffa', [FrontController::class, 'santiagoRuffa'])->name('front.santiago-ruffa');


