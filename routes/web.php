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
    return view('auth/login');
});


//Route::group(['middleware' => 'auth'], function () {

    Route::get('/ikaslea', 'IkasleaController@Index');
    //X
    Route::post('baja', 'IkasleaController@baja')->name('baja');


    Route::get('/ikaslea/perfila', 'IkasleaController@Perfila');
    
    
    //ikasleaEskaintzak ez da beharrezkoa indexean egongo delako
    
    
    Route::get('/ikaslea/interesa', 'IkasleaController@Interesa');
    
    
    Route::get('/ikaslea/CV', 'IkasleaController@CV');

    Route::post('CVSortu', 'IkasleaController@CVSortu')->name('CVSortu');
    
    
//***************************IrakasleaController********************
    Route::get('/irakaslea', 'IrakasleaController@Index');
    //X

    Route::post('import', 'IrakasleaController@import')->name('import');
    //X
     Route::get('/irakaslea/eskaintzak', 'IrakasleaController@Eskaintzak')->name('eskaintza');
          Route::get('/irakaslea/sortu', 'IrakasleaController@sortu')->name('sortu');

          Route::get('/irakaslea/oferta', 'IrakasleaController@oferta')->name('oferta');

    //Eskaintzak gehitzeko izango da
    //Route::get('/irakaslea/eskaintzak', 'IrakasleaController@Eskaintzak');
    
    Route::get('/irakaslea/ikasleak', 'IrakasleaController@Ikasleak');
    
    Route::get('/irakaslea/interesa', 'IrakasleaController@Interesa');
    



//*****************AdministratzaileaController***********************


    Route::get('/administratzailea', 'AdministratzaileaController@Index');
    

    Route::get('/administratzailea/irakasleak', 'AdministratzaileaController@Irakasleak');


    Route::get('/administratzailea/borrar/{email}', 'AdministratzaileaController@delete');
    
    Route::get('/administratzailea/irakasleak/sortu', 'AdministratzaileaController@IrakasleakSortu')->name('IrakasleakSortu');

    Route::post('insert', 'AdministratzaileaController@insert')->name('insert');

    
    Route::get('/administratzailea/ikasleak', 'AdministratzaileaController@Ikasleak');
    
    

//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');