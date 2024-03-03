<?php
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageHomeController::class,'anasayfa'])-> name('anasayfa');

Route::get('/hakkimizda', [PageController::class,'hakkimizda'])-> name('hakkimizda');

Route::get('/urunler', [PageController::class,'urunler'])-> name('urunler');

Route::get('/iletisim', [PageController::class,'iletisim'])-> name('iletisim');

Route::get('/urundetay', [PageController::class,'urundetay'])-> name('urundetay');

Route::get('/sepet', [PageController::class,'cart'])-> name('sepet');
