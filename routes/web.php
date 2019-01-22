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
    return view('welcome');
});
Route::get('/ikaslea', function () {
    return view('ikaslea');
});
Route::get('/ikaslea/perfila', function () {
    return view('ikasleaPerfila');
});
Route::get('/ikaslea/eskaintzak', function () {
    return view('ikasleaEskaintzak');
});
Route::get('/ikaslea/interesa', function () {
    return view('ikasleaInteresa');
});
Route::get('/ikaslea/CV', function () {
    return view('ikasleaCV');
});


Route::get('/irakaslea', function () {
    return view('irakaslea');
});
Route::get('/irakaslea/eskaintzak', function () {
    return view('irakasleaEskaintzak');
});
Route::get('/irakaslea/eskaintzak/gehitu', function () {
    return view('irakasleaEskaintzaGehitu');
});
Route::get('/irakaslea/eskaintzak/interesa', function () {
    return view('irakasleaInteresaIkusi');
});







Route::get('/administratzailea', function () {
    return view('administratzailea');
});
Route::get('/administratzailea/irakasleak', function () {
    return view('administratzaileaIrakaslea');
});
Route::get('/administratzailea/irakasleak/sortu', function () {
    return view('administratzaileaIrakasleaSortu');
});
Route::get('/administratzailea/eskaintzak', function () {
    return view('administratzaileaEskaintzak');
});
Route::get('/administratzailea/eskaintzak/sortu', function () {
    return view('administratzaileaEskaintzakSortu');
});
Route::get('/administratzailea/ikasleak', function () {
    return view('administratzaileaIkasleak');
});
Route::get('/administratzailea/ikasleak/gehitu', function () {
    return view('administratzaileaIkasleakGehitu');
});
