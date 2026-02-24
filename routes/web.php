<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function(){
    return view('news.index');
});

Route::get('/about-us/faculty-profile', function(){
    return view('/about-us/faculty-profile.index');
});

Route::get('/about-us/faculty-profile/history', function(){
    return view('/about-us/faculty-profile/history.index');
});

Route::get('/about-us/faculty-profile/faculty-identity', function(){
    return view('/about-us/faculty-profile/faculty-identity.index');
});

Route::get('/about-us/faculty-profile/integrity-zone', function(){
    return view('/about-us/faculty-profile/integrity-zone.index');
});

Route::get('/about-us/leadership-organization', function(){
    return view('about-us/leadership-organization.index');
});

Route::get('/about-us/academic-society/pharmaceutical-sciences', function(){
    return view('about-us/academic-society/pharmaceutical-sciences.index');
});

Route::get('/about-us/academic-society/staff', function(){
    return view('about-us/academic-society/staff.index');
});

Route::get('/about-us/academic-society', function(){
    return view('about-us/academic-society.index');
});

Route::get('/detail-dosen', function(){
    return view('detail-dosen.index');
});

Route::get('/academics/calendar-schedule', function(){
    return view('academics/calendar-schedule.index');
});

Route::get('/students-alumni/students-information', function(){
    return view('students-alumni/students-information.index');
});

Route::get('/students-alumni/students-organization', function(){
    return view('students-alumni/students-organization.index');
});

Route::get('/research-publication/research-groups', function(){
    return view('research-publication/research-groups.index');
});

Route::get('/research-publication/community-services', function(){
    return view('research-publication/community-services.index');
});

Route::get('/research-publication/publication-and-IPR', function(){
    return view('research-publication/publication-and-IPR.index');
});

Route::get('/research-publication/journals', function(){
    return view('research-publication/journals.index');
});

Route::get('/research-publication/ethics', function(){
    return view('research-publication/ethics.index');
});