<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\{Route, Auth};

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('dashboard');
Route::get('/admin/manajemen-user', [App\Http\Controllers\HomeController::class, 'adminManajuser'])->name('manajemen-user');
Route::get('/admin/sosmed', [App\Http\Controllers\HomeController::class, 'adminSosmed'])->name('sosmed');
Route::get('/admin/tags', [App\Http\Controllers\HomeController::class, 'adminTags'])->name('tags');
Route::get('/admin/kategori-artikel', [App\Http\Controllers\HomeController::class, 'adminKategori'])->name('kategori-artikel');
Route::get('/admin/banner-head', [App\Http\Controllers\HomeController::class, 'adminBannerhead'])->name('banner-head');
Route::get('/admin/banner-side', [App\Http\Controllers\HomeController::class, 'adminBannerside'])->name('banner-side');
// Route::get('/admin/artikel', [App\Http\Controllers\HomeController::class, 'adminArtikel'])->name('artikel');
Route::get('/admin/kelola-kategori', [App\Http\Controllers\HomeController::class, 'adminKelolaKategori'])->name('kelola_kategori');
Route::get('/admin/kelola-tags', [App\Http\Controllers\HomeController::class, 'adminKelolaTags'])->name('kelola_tags');

//Artikel
Route::get('/admin/artikel', [App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel');
Route::post('/admin/store_artikel', [App\Http\Controllers\ArtikelController::class, 'store_artikel']);
Route::get('/admin/artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'edit_artikel'])->name('edit_artikel');
Route::post('/admin/artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'update_artikel']);

// Route::get('/home', [App\Http\Controllers\EnduserController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\EnduserController::class, 'layout']);
Route::get('/kategori/{slug_kategori}', [App\Http\Controllers\EnduserController::class, 'lihat_kategori']);
Route::get('/tags/{slug_tag}', [App\Http\Controllers\EnduserController::class, 'lihat_tag']);
Route::get('/tentang-kami', [App\Http\Controllers\EnduserController::class, 'tentang_kami']);
Route::get('/info-iklan', [App\Http\Controllers\EnduserController::class, 'info_iklan']);
Route::get('/redaksi', [App\Http\Controllers\EnduserController::class, 'redaksi']);
Route::get('/pedoman-media-siber', [App\Http\Controllers\EnduserController::class, 'pedoman_media_siber']);
Route::get('/sop-perlindungan-wartawan', [App\Http\Controllers\EnduserController::class, 'sop_perlindungan_wartawan']);
Route::get('/kode-etik-internal', [App\Http\Controllers\EnduserController::class, 'kode_etik_internal']);
Route::get('/privacy-policy', [App\Http\Controllers\EnduserController::class, 'privacy_policy']);

Route::get('/{slug_artikel}', [App\Http\Controllers\EnduserController::class, 'detail_artikel']);

Route::get('/artikel/search', [App\Http\Controllers\EnduserController::class, 'search'])->name('search');

