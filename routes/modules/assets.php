
<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'user'], function(){

Route::get('/assets', [
    App\Http\Controllers\AssetsController::class,
    'index'
])->name('assets');


Route::get('/assets/create', [
    App\Http\Controllers\AssetsController::class,
    'create'
])->name('assets.create');

Route::post('/assets/create/save', [
    App\Http\Controllers\AssetsController::class,
    'save'
])->name('assets.create.save');


Route::get('assets/update/{id}',[
    App\Http\Controllers\AssetsController::class,
    'update'

 ])->name('assets.update');

 Route::post('assets/update/{id}/save',[
    App\Http\Controllers\AssetsController::class,
    'update_save'

 ])->name('assets.update.save');

 Route::get('assets/delete/{id}',[
    App\Http\Controllers\AssetsController::class,
    'delete'
    
 ])->name('assets.delete');

});
