<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/pemusik', function () {
  //  return view('pemusik');
//});
//Route::get('/admin', function () {
    //return view('admin');
//});
Route::get('/template', function () {
    return view('template');
});
//Route::get('/header', function () {
    //return view('Home');
//});
// Route::get('/welcome', function () {
//   return view('welcome');
// });
Route::get('/continue', function () {
    return view('continue');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/keluar', function () {
//     return view('template');
// });
Route::get('/kembali', function () {
    return view('template');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/plg', function () {
    return view('plg');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profilplg', function () {
    return view('profilplg');
});
Route::get('/alatmusik', function () {
    return view('alatmusik');
});
Route::get('/alatgitar', function () {
    return view('alatgitar');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/artikelgitar', function () {
    return view('artikelgitar');
});
Route::get('/artikelpiano', function () {
    return view('artikelpiano');
});
Route::get('/artikelsaxo', function () {
    return view('artikelsaxo');
});
Route::get('/artikeldrum', function () {
    return view('artikeldrum');
});

Route::get('/pmk', function () {
    return view('pmk');
});
Route::get('/profilpmk', function () {
    return view('profilpmk');
});
Route::get('/unggahartikel', function () {
    return view('unggahartikel');
});
Route::get('/unggahkursus', function () {
    return view('unggahkursus');
});
Route::get('/dash', function () {
    return view('dash');
});
Route::get('/transaksi', function () {
    return view('transaksi');
});
Route::get('/laporankita', function () {
    return view('laporankita');
});
Route::get('/dtplg', function () {
    return view('dtplg');
});
Route::get('/dtpmk', function () {
    return view('dtpmk');
});

// Route::views('admin.dashboard', 'admin.dashboard');

// Route::get ( '/' , function () { return view ( 'welcome' ); }); 
// Auth::routes (); 
// Route::get ( '/home', 'HomeController@index' ) -> name ( 'home' ); 
//  Route::get('/home', 'HomeController@index')->name('home')->middleware('auth'); 

Route::get('/login', 'HomeController@tes');
Route::post('/login/process', 'UserController@login_process');
Route::get('/template', 'UserController@logout');

Route::get('/login', 'HomeController@index');
Route::get('/template', 'GuestController@index');

Route::get('/dtplg','DashController@index');
Route::get('/dtplg/create','DashController@create');
Route::post('/dtplg/store','DashController@store');
Route::get('/dtplg/edit/{id}','DashController@edit');
Route::post('/dtplg/update','DashController@update');
Route::get('/dtplg/hapus/{id}','DashController@destroy');

Route::get('/dtpmk','MusController@index');
Route::get('/dtpmk/createpmk','MusController@create');
Route::post('/dtpmk/store','MusController@store');
Route::get('/dtpmk/editpmk/{id}','MusController@edit');
Route::post('/dtpmk/update','MusController@update');
Route::get('/dtpmk/hapus/{id}','MusController@destroy');

Route::get('/ikl','IklanController@index');
Route::get('/ikl/createikl','IklanController@create');
Route::post('/ikl/store','IklanController@store');

Route::get('/profilplg','ProfilController@index');

Route::get('/profilpmk','OfficeController@index');

Route::get('/transaksi','TransaksiController@index');
Route::get('/laporankita','LaporanController@index');







// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
