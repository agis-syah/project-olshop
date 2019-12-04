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
    Route::get('/barang', function () {
        return view('pages.barangmasuk.list');
    });
    Route::get('/data', function () {
        return view('pages.databarang.list');
    });
    Route::get('/customer', function () {
        return view('pages.datacustomer.list');
    });
    Route::get('/ongkir', function () {
        return view('pages.ongkir.list');
    });

    Route::resource('supplier',"SupplierController");

    Route::get('/return', function () {
    return view('pages.returnbarang.list');
    });
    Route::get('/formbarangmasuk', function () {
    return view('pages.barangmasuk.form');
    });
    Route::get('/formdatabarang', function () {
    return view('pages.databarang.form');
    });
    Route::get('/formdatasupplier', function () {
    return view('pages.datasupplier.form');
    });
    Route::get('/formbarangmasuk', function () {
    return view('pages.barangmasuk.form');
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
    Route::get('/formongkir', function () {
        return view('pages.ongkir.form');
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
