<?php

use App\Http\Controllers\HalloController;
use Illuminate\Support\Facades\Route;

Route::get('/halo', function () {
    return view('halo.blade.php');
});

Route ::get('/beranda',function(){
    return view('pages.beranda');
});

Route ::get('/profil',function (){
    return view('pages.profil');
});
   
Route::get('/tentang',function (){
    return view('pages.tentang');
});

Route::get('/produk',function (){
    return view('pages.produk');
});