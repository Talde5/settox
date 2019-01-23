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



//Route::group(['middleware' => 'auth'], function () {

    Route::get('/ikaslea', 'IkasleaController@getIndex');

    /*Route::get('/ikaslea', function () {
        return view('ikaslea');
    });*/

    Route::get('/ikaslea/perfila', 'IkasleaController@getPerfila');
    /*Route::get('/ikaslea/perfila', function () {
        return view('ikasleaPerfila');
    });*/
    
    //ikasleaEskaintzak ez da beharrezkoa indexean egongo delako
    
    /*Route::get('/ikaslea/eskaintzak', function () {
        return view('ikasleaEskaintzak');
    });*/
    Route::get('/ikaslea/interesa', 'IkasleaController@getInteresa');
    
    /*Route::get('/ikaslea/interesa', function () {
        return view('ikasleaInteresa');
    });*/
    Route::get('/ikaslea/CV', 'IkasleaController@getCV');
    
    /*Route::get('/ikaslea/CV', function () {
        return view('ikasleaCV');
    });*/
//***************************IrakasleaController********************
    Route::get('/irakaslea', 'IrakasleaController@index');
    /*Route::get('/irakaslea', function () {
        return view('irakaslea');
    });*/

    //Para importar xlsx, xls y csv
    Route::post('import', 'IrakasleaController@import')->name('import');

    //Eskaintzak gehitzeko izango da
    Route::get('/irakaslea/Eskaintzak', 'IrakasleaController@getEskaintzak');
    /*Route::get('/irakaslea/eskaintzak', function () {
        return view('irakasleaEskaintzak');
    });*/

    Route::get('/irakaslea/ikasleak', 'IrakasleaController@getIkasleak');
    
    Route::get('/irakaslea/interesa', 'IrakasleaController@getInteresa');
    /*Route::get('/irakaslea/eskaintzak/interesa', function () {
        return view('irakasleaInteresaIkusi');
    });*/



//*****************AdministratzaileaController***********************


    Route::get('/administratzailea', 'AdministratzaileaController@getIndex');
    /*Route::get('/administratzailea', function () {
        return view('administratzailea');
    });*/

    Route::get('/administratzailea/irakasleak', 'AdministratzaileaController@getIrakasleak');
    /*Route::get('/administratzailea/irakasleak', function () {
        return view('administratzaileaIrakaslea');
    });*/
    Route::get('/administratzailea/irakasleak/sortu', 'AdministratzaileaController@getIrakasleakSortu');
    /*Route::get('/administratzailea/irakasleak/sortu', function () {
        return view('administratzaileaIrakasleaSortu');
    });*/
    
    Route::get('/administratzailea/ikasleak', 'AdministratzaileaController@getIkasleak');
    /*Route::get('/administratzailea/ikasleak', function () {
        return view('administratzaileaIkasleak');
    });*/
    

//});