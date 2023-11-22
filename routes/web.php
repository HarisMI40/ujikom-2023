<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome'); // menampilkan file welcome.blade.php yang ada di folder views
});

Route::get('/login', function(){
    return "INi Halaman Login";
});
