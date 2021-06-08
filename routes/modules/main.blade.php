
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\COntrollers\MainController::class,
    'index'
])->name('app');