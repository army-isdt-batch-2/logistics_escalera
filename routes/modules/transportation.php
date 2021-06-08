
<?php

use Illuminate\Support\Facades\Route;

Route::get('/transportation', [
    App\Http\Controllers\TransportationController::class,
    'index'
])->name('transportation');

Route::get('/transportation/create', [
    App\Http\Controllers\TransportationController::class,
    'create'
])->name('transportation.create');

Route::post('/transportation/create/save', [
    App\Http\Controllers\TransportationController::class,
    'save'
])->name('transportation.create.save');

Route::get('/transportation/update/{id}',[
    App\Http\Controllers\TransportationController::class,
    'update'

 ])->name('transportation.update');

 Route::post('/transportation/update/{id}/save',[
    App\Http\Controllers\TransportationController::class,
    'update_save'

 ])->name('transportation.update.save');

 Route::get('/transportation/delete/{id}',[
    App\Http\Controllers\TransportationController::class,
    'delete'
    
 ])->name('transportation.delete');
