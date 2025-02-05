<?php
use App\Http\Controllers\PagesController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/beranda', function () {
//     return view('beranda');
// })->name('beranda');

Route::get('/beranda', [PagesController::class, 'beranda'])->name('pages.beranda');
// Route untuk halaman akademik
Route::get('/akademik', [PagesController::class, 'akademik'])->name('pages.akademik');
// penelitian
Route::get('/penelitian', [PagesController::class, 'penelitian'])->name('pages.penelitian');

Route::get('/api/', [PagesController::class, 'frontend']);
