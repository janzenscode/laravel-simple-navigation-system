<?php


Route::get('/', 'PagesController@index');

Route::get('/home', 'PagesController@index');
Route::get('/profile', 'PagesController@profile');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/contact', 'PagesController@contact');

Route::view('/', 'pages/home');
Route::view('page/home', 'pages/home');
Route::view('page/profile', 'pages/profile');
Route::view('page/gallery', 'pages/gallery');
Route::view('page/contact', 'pages/contact');


// Route::view('/home', 'pages/home');
// Route::view('/profile', 'pages/profile');
// Route::view('/gallery', 'pages/gallery');
// Route::view('/contact', 'pages/contact');
