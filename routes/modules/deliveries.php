
<?php

use Illuminate\Support\Facades\Route;

Route::get('/deliveries', [
    App\Http\Controllers\DeliveriesController::class,
    'index'
])->name('deliveries');

Route::get('/deliveries/create', [
    App\Http\Controllers\DeliveriesController::class,
    'create'
])->name('deliveries.create');

Route::post('/deliveries/create/save', [
    App\Http\Controllers\DeliveriesController::class,
    'save'
])->name('deliveries.create.save');

Route::get('/deliveries/update/{id}',[
    App\Http\Controllers\DeliveriesController::class,
    'update'

 ])->name('deliveries.update');

 Route::post('/deliveries/update/{id}/save',[
    App\Http\Controllers\DeliveriesController::class,
    'update_save'

 ])->name('deliveries.update.save');

 Route::get('/deliveries/delete/{id}',[
    App\Http\Controllers\DeliveriesController::class,
    'delete'
    
 ])->name('deliveries.delete');