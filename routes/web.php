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


route::get('/', function () {
    return redirect( route('home') );
}); 
*/


Route::get('/', function () {
    if ( Auth::check()) {
        if ( session('notifications') == null ) return redirect()->route('notif.index');
        if ( !session('poubelle_info_prepared')) return redirect()->route('poubelle.index');
        session(['poubelle_info_prepared' => false]);
        return view('welcome');
    }
    else return redirect( route('login') );
})->name('home'); 

Route::get('/notifications', function () {
     
    if ( Auth::check()) return view('Notif')->with('notifs', session('notifications'));
    else return view('auth/login');
})->name('notifications'); 
    
Route::get('/profile', function () {
    if ( Auth::check()) return view('profile');
    else return view('auth/login');
})->name('profile'); 

Route::get('/paramaitre', function () {
    if ( Auth::check()) return view('paramaitres');
    else return view('auth/login');
})->name('paramaitre');

Route::get('/ip', function () {
    return view('ip') ;
}); 

Route::get('/getNiveauPoubelle/{idPoubelle}', "PoubelleController@show");
Route::get('/setNiveauPoubelle/{idPoubelle}/{niveau}', "PoubelleController@update");  


Route::resource('pidiaterie', 'PidiaterieController');
Route::resource('poubelle', 'PoubelleController');
Route::resource('niveausauvegarde', 'NiveauSauvegardeController');
Route::resource('notif', 'NotifController');

Auth::routes();



