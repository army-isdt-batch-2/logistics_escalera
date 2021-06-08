
<?php

use Illuminate\Support\Facades\Route;

Route::get('/return', [
    App\Http\Controllers\ReturnController::class,
    'index'
])->name('return');

Route::get('/return/create', [
    App\Http\Controllers\ReturnController::class,
    'create'
])->name('return.create');

Route::post('/return/create/save', [
    App\Http\Controllers\ReturnController::class,
    'save'
])->name('return.create.save');

Route::get('/return/update/{id}',[
    App\Http\Controllers\ReturnController::class,
    'update'

 ])->name('return.update');

 Route::post('/return/update/{id}/save',[
    App\Http\Controllers\ReturnController::class,
    'update_save'

 ])->name('return.update.save');

 Route::get('/return/delete/{id}',[
    App\Http\Controllers\ReturnController::class,
    'delete'
    
 ])->name('return.delete');