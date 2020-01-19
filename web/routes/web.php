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
    
    Route::get('/user','UserController@index')
    ->name("user");
    Route::post("/user/simpan",'UserController@simpan')
    ->name("user.update");

    Route::resource('/barangmasuk', "BarangMasukController");

    Route::resource('/databarang', "DataBarangController");
    // Route::resource('databarang/detailproduk/{id}', "DataBarangController@detail");
    route::get('detailproduk',function(){
        return view('pages/databarang/detail');
    });
    Route::resource('/customer', "CustomerController");

    Route::get('laporan/stok',"ReportController@laporanstok")
    ->name('pages.laporan.stok');

    Route::get('laporan/barangmasuk',"ReportController@laporanbarangmasuk")
    ->name('pages.laporan.barangmasuk');

    Route::get('laporan/penjualan',"ReportController@laporanpenjualan")
    ->name('pages.laporan.penjualan');

    Route::get('laporan/return',"ReportController@laporanreturn")
    ->name('pages.laporan.return');

    Route::resource('ongkir',"OngkirController");
    Route::get('databarang/kode/{id}','DataBarangController@getbarang');
    Route::resource('supplier',"SupplierController");
   
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
    Route::get('/return', function () {
        return view('pages.returnbarang.list');
        });
    Route::get('customer/reset/{id}','CustomerController@resetPassword')
        ->name('customer.reset');
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
