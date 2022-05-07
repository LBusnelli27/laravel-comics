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


Route::get('/', function () {
    return view('guests.home', ["comicsElements" => config("comics")], ["navBuyElements" => config("navBuy")] );
});

Route::get('/{id}', function ($id) {
    $comicsList = config("comics");

    if (is_numeric($id) && $id <= count($comicsList)) {
        return view('guests.comicDetail', ["comic" => $comicsList[$id]]);
    } else {
        abort(404);
    }
});