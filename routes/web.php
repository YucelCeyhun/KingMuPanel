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

//Route::get('/', function () {
//    $character = \App\Character::whereName("DarkTerror")->get()->first();
//    $equipments = collect([0, 1, 2, 3, 4, 5, 6, 7, 8]);
//    $count = $equipments->count() * 32;
//    $equipmentsString = substr($character->Inventory, 0, $count);
//    $equipments = $equipments->map(function ($equipment) use ($equipmentsString) {
//        return substr($equipmentsString, $equipment * 32, 32);
//    });
//
//    return $equipments;
//});


Route::get('/','AccountController@create')->name('acccount.create');
Route::post('/','AccountController@store')->name('acccount.store');
