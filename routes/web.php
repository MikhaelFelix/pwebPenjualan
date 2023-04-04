<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\produkControllerr;


Route::get('/show/{id}', function ($id) {
    echo "Nilai Parameter Adalah " . $id;
});

Route::get('/show/{id?}', function ($id = 1) {
    echo "Nilai Parameter Adalah " . $id;
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah " . $nama;
})->where('nama', '[A-Za-z]+');

Route::get('/index', function ($nama) {
    echo "<a href='" . route('create') . "'>Akses Route dengan nama </a>";
});

Route::get('/create', function () {
    echo "Route diakses menggunakan nama ";
})->name('create');

Route::get('/produk/index', [produkController::class, 'index']);
Route::get('/produk/show', [produkController::class, 'show']);
Route::get('/halaman', function () {
    $title = "Mikhael Felix";
    $konten = 'Mikhael and the deathly hallows: part 2';
    return view('layout.halaman', compact('title', 'konten'));
});
Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::resource('/produk', produkControllerr::class);
