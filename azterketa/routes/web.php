<?php

use App\Http\Controllers\AlokairuaController;
use Illuminate\Support\Facades\Route;

use App\Models\Yate;
use App\Http\Controllers\YateController;

Route::resource('yates', YateController::class);
Route::resource('alokairuas', AlokairuaController::class);

Route::get('/', function () {
    $yates = Yate::all();
    return view('yates.index', compact('yates'));
});
