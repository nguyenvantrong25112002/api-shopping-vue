<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('product')->group(function () {
    Route::get('', [ProductController::class , 'index']);
});
?>