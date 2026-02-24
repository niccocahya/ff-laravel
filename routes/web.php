<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function(){
    return view('news.index');
});

Route::get('/faculty-profile', function(){
    return view('/faculty-profile.index');
});

Route::get('/faculty-profile/history', function(){
    return view('/faculty-profile/history.index');
});

Route::get('/faculty-profile/faculty-identity', function(){
    return view('/faculty-profile/faculty-identity.index');
});

Route::get('/faculty-profile/integrity-zone', function(){
    return view('/faculty-profile/integrity-zone.index');
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

Route::get('/calendar-schedule', function(){
    return view('calendar-schedule.index');
});

Route::get('/students-alumni', function(){
    return view('calendar-schedule.index');
});