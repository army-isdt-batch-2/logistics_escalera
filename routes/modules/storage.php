
<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'user'], function(){
    Route::get('/storage', [
        App\Http\Controllers\StorageController::class,
        'index'
    ])->name('storage');

    Route::get('/storage/create', [
        App\Http\Controllers\StorageController::class,
        'create'
    ])->name('storage.create');

    Route::post('/storage/create/save', [
        App\Http\Controllers\StorageController::class,
        'save'
    ])->name('storage.create.save');

    Route::get('/storage/update/{id}',[
        App\Http\Controllers\StorageController::class,
        'update'

    ])->name('storage.update');

    Route::post('/storage/update/{id}/save',[
        App\Http\Controllers\StorageController::class,
        'update_save'

    ])->name('storage.update.save');

    Route::get('/storage/delete/{id}',[
        App\Http\Controllers\StorageController::class,
        'delete'
        
    ])->name('storage.delete');

});