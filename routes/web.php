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

Route::get('/about-us/facilities-units', function(){
    return view('about-us/facilities-units.index');
});

Route::get('/about-us/facilities-units/reading-room-collection-books', function(){
    return view('about-us/facilities-units/reading-room-collection-books.index');
});

Route::get('/about-us/facilities-units/thesis-list-collection', function(){
    return view('about-us/facilities-units/thesis-list-collection.index');
});

Route::get('/about-us/facilities-units/apotek-farmasi', function(){
    return view('about-us/facilities-units/apotek-farmasi.index');
});

Route::get('/about-us/facilities-units/assessment-service-unit', function(){
    return view('about-us/facilities-units/assessment-service-unit.index');
});

Route::get('/about-us/partnerships', function(){
    return view('about-us/partnerships.index');
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

Route::get('/services-information/news-events/events', function(){
    return view('services-information/news-events/events.index');
});

Route::get('/services-information/news-events/news', function(){
    return view('services-information/news-events/news.index');
});

Route::get('/services-information/survey-evaluation', function(){
    return view('services-information/survey-evaluation.index');
});

Route::get('/services-information/PPID', function(){
    return view('services-information/PPID.index');
});

Route::get('/services-information/important-links', function(){
    return view('services-information/important-links.index');
});

Route::get('/services-information/public-services', function(){
    return view('services-information/public-services.index');
});

Route::get('/services-information/forms-downloads/downloads', function(){
    return view('services-information/forms-downloads/downloads.index');
});

Route::get('/services-information/forms-downloads/forms', function(){
    return view('services-information/forms-downloads/forms.index');
});

Route::get('/research-group', function(){
    return view('research-group.index');
});

Route::get('/sarjana', function(){
    return view('sarjana.index');
});

Route::get('/sarjana/about', function(){
    return view('sarjana/about.index');
});

Route::get('/sarjana/about/about-apothecary', function(){
    return view('sarjana/about/about-apothecary.index');
});

Route::get('/sarjana/about/about-iup', function(){
    return view('sarjana/about/about-iup.index');
});

Route::get('/sarjana/collaboration', function(){
    return view('sarjana/collaboration.index');
});

Route::get('/sarjana/alumni', function(){
    return view('sarjana/alumni.index');
});

Route::get('/sarjana/education', function(){
    return view('sarjana/education.index');
});

Route::get('/sarjana/education/competency', function(){
    return view('sarjana/education/competency.index');
});

Route::get('/sarjana/education/scholarship', function(){
    return view('sarjana/education/scholarship.index');
});

Route::get('/s2mfk', function(){
    return view('s2mfk.index');
});

Route::get('/s2mfk/about', function(){
    return view('s2mfk/about.index');
});

Route::get('/s2mfk/collaboration', function(){
    return view('s2mfk/collaboration.index');
});

Route::get('/s2mfk/alumni', function(){
    return view('s2mfk/alumni.index');
});

Route::get('/s2mfk/education', function(){
    return view('s2mfk/education.index');
});

Route::get('/s2mfk/education/competency', function(){
    return view('s2mfk/education/competency.index');
});

Route::get('/s2mfk/education/scholarship', function(){
    return view('s2mfk/education/scholarship.index');
});

Route::get('/s2mfk/education/staff', function(){
    return view('s2mfk/education/staff.index');
});

Route::get('/s2mfk/news-events/news', function(){
    return view('s2mfk/news-events/news.index');
});

Route::get('/s2mfk/news-events/events', function(){
    return view('s2mfk/news-events/events.index');
});

Route::get('/s2mfk/news', function(){
    return view('s2mfk/news.index');
});