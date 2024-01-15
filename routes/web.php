<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Frontend\GirisController;
use App\Http\Controllers\Frontend\UyeController;





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

Route::get('/', [PageHomeController::class,'anasayfa'])->name('anasayfa');

Route::get('/hakkında', [PageController::class,'hakkında'])->name('hakkında');





Route::get('/iletisim', [AjaxController::class, 'iletisimForm'])->name('iletisim.form');
Route::get('/iletisim/kaydet', [AjaxController::class, 'iletisimKaydet'])->name('iletisim.kaydet');






Route::post('/giris', [GirisController::class, 'giris'])->name('giris');
Route::get('/giris', [GirisController::class, 'girisForm'])->name('giris.form');





Route::post('/kayit', [UyeController::class, 'register'])->name('kayit');
Route::get('/kayit', [UyeController::class, 'showRegistrationForm'])->name('kayit.form');




