<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('records')->group(function () {
    Route::get('/{movement_id}', [ApiController::class, 'index']);
});
