<?php

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
    return view('pages.home');
});

Route::get('about', function() {
    return view('pages.about');
});

Route::get('about/cube', function() {
    return view('pages.aboutcube');
});

Route::get('about/league', function() {
    return view('pages.theleague');
});

Route::get('about/jacob', function() {
    return view('pages.aboutme');
});

Route::get('thecube', function(){
    return view('pages.thecube');
});

Route::get('list', function() {
    return view('pages.list');
});

Route::get('thecube/crackapack', function() {
    return view('pages.crackapack');
});

Route::get('thecube/visualspoiler', function() {
    return view('pages.visualspoiler');
});

Route::get('thecube/changelog', function() {
    return view('blog/tags/changelog');
});

Route::get('theleague', function() {
    return view('pages.theleague');
});

Route::get('theleague/standings', function() {
    return view('pages.standings');
});

Route::get('theleague/champions', function() {
    return view('pages.champions');
});

Route::get('blog', function() {
    return view('pages.blog');
});