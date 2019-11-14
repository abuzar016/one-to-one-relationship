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
    
    // $user = factory(\App\User::class)->create();

    // $phone = new \App\Phone();

    // $phone->phone = '123-123-1234';

    // $user->phone()->save($phone);

    // $user->phone()->create([
    //     'phone' => '222-333-2224',
    // ]);

});


Route::resource('user','UserController');
Route::resource('phone','PhoneController');