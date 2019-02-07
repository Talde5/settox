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


Route::group(['middleware' => 'App\Http\Middleware\Ikaslea'], function(){
    Route::get('/ikaslea', 'IkasleaController@Index');
    //X
    Route::post('baja', 'IkasleaController@baja')->name('baja');


    Route::get('/ikaslea/perfila', 'IkasleaController@Perfila');
    
    Route::post('perfilaSortu', 'IkasleaController@perfilaSortu')->name('perfilaSortu');
    Route::post('perfilaAldatu', 'IkasleaController@perfilaAldatu')->name('perfilaAldatu');
    
    //ikasleaEskaintzak ez da beharrezkoa indexean egongo delako
    
    
    Route::get('/ikaslea/interesa', 'IkasleaController@Interesa');
    
    
    Route::get('/ikaslea/CV', 'IkasleaController@CV');

    Route::post('CVSortu', 'IkasleaController@CVSortu')->name('CVSortu');
    Route::post('CVAldatu', 'IkasleaController@CVAldatu')->name('CVAldatu');

});
    

    
//***************************IrakasleaController********************

    Route::group(['middleware' => 'App\Http\Middleware\Irakaslea'], function(){

    Route::get('/irakaslea', 'IrakasleaController@Index');
    //X

    Route::post('import', 'IrakasleaController@import')->name('import');
    //X
     Route::get('/irakaslea/eskaintzak', 'IrakasleaController@Eskaintzak')->name('eskaintza');
     Route::get('/irakaslea/sortu', 'IrakasleaController@sortu')->name('sortu');
     Route::get('/irakaslea/ikasleak/borrar/{id}', 'IrakasleaController@delete');

     

    //Eskaintzak gehitzeko izango da
    //Route::get('/irakaslea/eskaintzak', 'IrakasleaController@Eskaintzak');
    
    Route::get('/irakaslea/ikasleak', 'IrakasleaController@Ikasleak');
    
    Route::get('/irakaslea/interesa', 'IrakasleaController@Interesa');
    

});

//*****************AdministratzaileaController***********************


Route::group(['middleware' => 'App\Http\Middleware\Administratzailea'], function(){
    Route::get('/administratzailea', 'AdministratzaileaController@Index');
    

    Route::get('/administratzailea/irakasleak', 'AdministratzaileaController@Irakasleak');


Route::get('/administratzailea/delete/{id}', 'AdministratzaileaController@delete');
    Route::get('/administratzailea/borrar/{id}', 'AdministratzaileaController@borrar');
    
    Route::get('/administratzailea/irakasleak/sortu', 'AdministratzaileaController@IrakasleakSortu')->name('IrakasleakSortu');

    Route::post('insert', 'AdministratzaileaController@insert')->name('insert');

    
    Route::get('/administratzailea/ikasleak', 'AdministratzaileaController@Ikasleak');
});
    
    

//});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

