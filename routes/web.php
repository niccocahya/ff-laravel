<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function(){
    return view('news.index');
});

Route::get('/faculty-profile', function(){
    return view('faculty-profile.index');
});

Route::get('/leadership-organization', function(){
    return view('leadership-organization.index');
});

Route::get('/academic-society', function(){
    return view('academic-society.index');
});

Route::get('/detail-dosen', function(){
    return view('detail-dosen.index');
});