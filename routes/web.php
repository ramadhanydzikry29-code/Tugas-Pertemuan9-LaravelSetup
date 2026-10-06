<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// 1. Halaman utama — data dinamis (array) dikirim dari route
Route::get('/', function () {
    return view('welcome', [
        'name'    => 'Dzikry Ramadhany',
        'courses' => ['HTML', 'CSS', 'JavaScript', 'PHP Native', 'Laravel'],
    ]);
})->name('home');

// 2. Halaman about — array asosiatif dari route
Route::get('/about', function () {
    return view('about', [
        'profile' => [
            'Nama'    => 'Dzikry Ramadhany',
            'NIM'     => '4251250008',
            'Kampus'  => 'Universitas Negeri Medan',
            'Mata Kuliah' => 'Pemrograman Web',
        ],
        'skills' => ['PHP', 'Laravel', 'MySQL', 'Tailwind CSS'],
    ]);
})->name('about');

// 3. Halaman contact — lewat Controller (hasil make:controller)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/hello/{nama?}', function (string $nama = 'Dzikry') {
    return view('hello', ['nama' => $nama]);
})->where('nama', '[A-Za-z ]+')->name('hello');