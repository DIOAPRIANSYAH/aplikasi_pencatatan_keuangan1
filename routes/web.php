<?php

use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    $pic_distribusis = \App\Models\Pic_distribusi::get();
    return view('buttons-showcase.icon', compact('pic_distribusis'));
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');


//routeViewProduksi
Route::get('/pages/produksi/pic', function () {
    $pic = \App\Models\Pic_produksi::get();
    return view('pages.produksi.pic', compact('pic'));
})->middleware(['auth'])->name('pages.produksi.pic');


Route::get('/pages/produksi/operasional', function () {
    $op = \App\Models\Operasional_produksi::get();
    return view('pages.produksi.operasional', compact('op'));
})->middleware(['auth'])->name('pages.produksi.operasional');

Route::get('/pages/produksi/pemasukan', function () {
})->middleware(['auth'])->name('pages.produksi.pemasukan');

Route::get('/pages/produksi/pengeluaran', function () {
    $peng = \App\Models\Pengeluaran_produksi::get();
    return view('pages.produksi.pengeluaran', compact('peng'));
})->middleware(['auth'])->name('pages.produksi.pengeluaran');

Route::get('/pages/produksi/laporan', [ProduksiController::class, 'index'])->name('pages.produksi.laporan');;


//routeViewDistribusi
Route::get('/pages/distribusi/pic', function () {
    $pic = \App\Models\Pic_distribusi::get();
    $op = \App\Models\Operasional_distribusi::get();
    return view('pages.distribusi.pic', compact('pic', 'op'));
})->middleware(['auth'])->name('pages.distribusi.pic');

Route::get('/pages/distribusi/operasional', function () {
    $op = \App\Models\Operasional_distribusi::get();
    return view('pages.distribusi.operasional', compact('op'));
})->middleware(['auth'])->name('pages.distribusi.operasional');

Route::get('/pages/distribusi/pemasukan', function () {
    $pem = \App\Models\Pemasukan_distribusi::get();
    return view('pages.distribusi.pemasukan', compact('pem'));
})->middleware(['auth'])->name('pages.distribusi.pemasukan');

Route::get('/pages/distribusi/pengeluaran', function () {
    $peng = \App\Models\Pengeluaran_distribusi::get();
    return view('pages.distribusi.pengeluaran', compact('peng'));
})->middleware(['auth'])->name('pages.distribusi.pengeluaran');

//routeViewDelivery
Route::get('/pages/delivery/pic', function () {
    $pic = \App\Models\Pic_delivery::get();
    return view('pages.delivery.pic', compact('pic'));
})->middleware(['auth'])->name('pages.delivery.pic');

Route::get('/pages/delivery/operasional', function () {
    $op = \App\Models\Operasional_delivery::get();
    return view('pages.delivery.operasional', compact('op'));
})->middleware(['auth'])->name('pages.delivery.operasional');

Route::get('/pages/delivery/pemasukan', function () {
    $pem = \App\Models\Pemasukan_delivery::get();
    return view('pages.delivery.pemasukan', compact('pem'));
})->middleware(['auth'])->name('pages.delivery.pemasukan');

Route::get('/pages/delivery/pengeluaran', function () {
    $peng = \App\Models\Pengeluaran_delivery::get();
    return view('pages.delivery.pengeluaran', compact('peng'));
})->middleware(['auth'])->name('pages.delivery.pengeluaran');

require __DIR__ . '/auth.php';
