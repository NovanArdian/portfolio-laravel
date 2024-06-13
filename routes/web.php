
<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman masthead
Route::get('/masthead', function () {
    return view('masthead');
});

// Rute untuk halaman about
Route::get('/about', function () {
    return view('about');
});

// Rute untuk halaman portfolio
// routes/web.php
Route::get('/portfolio', function () {
    $portfolios = [
        ['image' => 'cabin.png'],
        ['image' => 'cake.png'],
        ['image' => 'circus.png'],
        ['image' => 'game.png'],
        ['image' => 'safe.png'],
        ['image' => 'submarine.png']
    ];
    return view('portfolio', compact('portfolios'));
});


