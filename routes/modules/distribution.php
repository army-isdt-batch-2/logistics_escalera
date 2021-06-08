
<?php

use Illuminate\Support\Facades\Route;

Route::get('/distribution', [
    App\Http\Controllers\DistributionController::class,
    'index'
])->name('distribution');

Route::get('/distribution/create', [
    App\Http\Controllers\DistributionController::class,
    'create'
])->name('distribution.create');

Route::post('/distribution/create/save', [
    App\Http\Controllers\DistributionController::class,
    'save'
])->name('distribution.create.save');

Route::get('/distribution/update/{id}',[
    App\Http\Controllers\DistributionController::class,
    'update'

 ])->name('distribution.update');

 Route::post('/distribution/update/{id}/save',[
    App\Http\Controllers\DistributionController::class,
    'update_save'

 ])->name('distribution.update.save');

 Route::get('/distribution/delete/{id}',[
    App\Http\Controllers\DistributionController::class,
    'delete'
    
 ])->name('distribution.delete');