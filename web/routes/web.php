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
    return view('pages.login');
});
Auth::routes();
Route::middleware("auth")->group(function () {
    Route::get('/home', function(){
        return view('pages.dashboard');
    })->name("home");
    Route::get('/kalender', function () {
        return view('pages.kalender');
    });

    Route::resource('/barangmasuk', 'BarangMasukController');

    Route::resource('/databarang', 'DataBarangController');

    Route::get('/customer', function () {
        return view('pages.datacustomer.list');
    });
    Route::resource('ongkir',"OngkirController");

    Route::resource('supplier',"SupplierController");

    Route::get('/return', function () {
    return view('pages.returnbarang.list');
    });
    Route::get('/laporanreturn', function () {
    return view('pages.laporan.return');
    });
    Route::get('/laporanpenjualan', function () {
    return view('pages.laporan.penjualan');
    });
    Route::get('/laporanstok', function () {
    return view('pages.laporan.stok');
    });    
    Route::get('/profil', function () {
        return view('pages.profile.profil');
        });
    Route::get('/password', function () {
        return view('pages.profile.password');
        });
    Route::get('/detail', function () {
        return view('pages.laporan.detail');
        });
});
Route::get("/register",function(){
    return view('pages.register');
})->name("register")->middleware("guest");
Route::get("/login",function(){
    return view('pages.login');
})->name("login")->middleware("guest");
Route::get("/reset",function(){
    return view('pages.reset');
})->name("reset")->middleware("guest");
