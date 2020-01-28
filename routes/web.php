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

Route::get('/bye', function () {
    return view('bye');
})->name('bye');
Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

Route::get('/{userid}', function () {
    return view('welcome');
});


Route::post('/consent', function () {
    $customer = \App\Customer::where('userid', request()->userid)->firstOrFail();
    $customer->consent = 'consented';
    $customer->save();
    return redirect('thanks');
});
Route::post('/deny', function () {
    $customer = \App\Customer::where('userid', request()->userid)->firstOrFail();
    $customer->consent = 'denied';
    $customer->save();
    return redirect('bye');
});
