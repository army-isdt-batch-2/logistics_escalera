
<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'user'], function(){
    Route::get('/supplier', [
        App\Http\Controllers\SupplierController::class,
        'index'
    ])->name('supplier');

    Route::get('/supplier/create', [
        App\Http\Controllers\SupplierController::class,
        'create'
    ])->name('supplier.create');

    Route::post('/supplier/create/save', [
        App\Http\Controllers\SupplierController::class,
        'save'
    ])->name('supplier.create.save');

    Route::get('/supplier/update/{id}',[
        App\Http\Controllers\SupplierController::class,
        'update'

    ])->name('supplier.update');

    Route::post('/supplier/update/{id}/save',[
        App\Http\Controllers\SupplierController::class,
        'update_save'

    ])->name('supplier.update.save');

    Route::get('/supplier/delete/{id}',[
        App\Http\Controllers\SupplierController::class,
        'delete'
        
    ])->name('supplier.delete');

});