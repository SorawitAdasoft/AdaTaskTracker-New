<?php

use Illuminate\Support\Facades\Route;
use Modules\Task\Http\Controllers\TaskController;

Route::prefix('/tasks')->group(function () {
    Route::resource('/', TaskController::class)->names('task');
});
