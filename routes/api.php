<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CategoryController::class)->group(function(){
    Route::post('categories', 'store')->name('categories.store');
    Route::get('categories', 'index')->name('categories.index');
    Route::get('categories/{category}', 'show')->name('categories.show');
    Route::put('categories/{category}', 'update')->name('categories.update');
    Route::delete('categories/{category}', 'destroy')->name('categories.delete');
});
