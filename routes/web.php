<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\InvoiceController::class,'index'])->name('index');
// Route::get('/invoice/create',[App\Http\Controllers\InvoiceController::class,'create'])->name('create');
// Route::get('/',[App\Http\Controllers\InvoiceController::class,'index'])->name('index');


Route::get('/generate-pdf/{id}', 'App\Http\Controllers\InvoiceController@generatePdf')->name('generate.pdf');

// Route::get('/invoice/index',['as' =>'invoice.index','uses' => 'App\Http\Controllers\InvoiceController@index']);
Route::get('invoice/print/{id}',['as' =>'invoice.print', 'uses' =>'App\Http\Controllers\InvoiceController@print']);

Route::get('/generate-pdf/{id}',[App\Http\Controllers\InvoiceController::class, 'generatepdf'])->name('generatep.pdf');


Route::resource('invoice', 'App\Http\Controllers\InvoiceController');

Route::get('/generate-pdf/{id}', 'App\Http\Controllers\InvoiceController@generatePdf')->name('generate.pdf');

