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
    return view('main');
});

Route::get('/casa-en-venta/505-maple', function () {
    return '505 Maple';
});

Route::get('casa-en-venta/1393-sutters-walk', function () {
    return '1393-sutters-walk';
});

Route::get('requiero-credito', function() {
    return 'Requiero credito';
});
// Route::get('/', function () {
//     return view('welcome');
// });
