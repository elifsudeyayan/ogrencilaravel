<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\İletisimController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\GirisController;
use App\Http\Controllers\Backend\UyeController;



Route::get('/', [DashboardController::class, 'index'])->name('panel');


Route::get('/iletisim', [İletisimController::class,'index'])->name('iletisim.index');
Route::get('/iletisim/{id}/edit', [İletisimController::class,'edit'])->name('iletisim.edit');
Route::put('/iletisim/{id}/update', [İletisimController::class,'update'])->name('iletisim.update');
Route::delete('/iletisim/{id}', [İletisimController::class,'destroy'])->name('iletisim.destroy');


Route::get('/about' , [AboutController::class, 'index'] )->name('about.index');
Route::get('/about/update' , [AboutController::class, 'update'] )->name('about.update');

Route::get('/kullanici', [GirisController::class,'index'])->name('kullanici.index');
Route::get('/kullanici/{id}/edit', [GirisController::class,'edit'])->name('kullanici.edit');
Route::put('/kullanici/{id}/update', [GirisController::class,'update'])->name('kullanici.update');
Route::delete('/kullanici/{id}', [GirisController::class,'destroy'])->name('giris.destroy');



Route::get('/uye', [UyeController::class,'index'])->name('uye.index');
Route::get('/uye/{id}/edit', [UyeController::class,'edit'])->name('uye.edit');
Route::put('/uye/{id}/update', [UyeController::class,'update'])->name('uye.update');
Route::delete('/uye/{id}', [UyeController::class,'destroy'])->name('uye.destroy');








