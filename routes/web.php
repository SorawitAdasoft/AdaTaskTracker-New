<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('layouts/master', [
        'theme' => session('theme', 'light'),
        'sidebarOpen' =>  session('sidebarOpen', 'true')
    ]);
});

// Auto load web.php from each module
$modulePath = base_path('Modules');

foreach (scandir($modulePath) as $module) {
    if ($module === '.' || $module === '..') continue;

    $webRoutes = "$modulePath/$module/routes/web.php";
    $apiRoutes = "$modulePath/$module/routes/api.php";

    if (file_exists($webRoutes)) {
        Route::middleware('web')
            ->namespace("Modules\\$module\\Http\\Controllers")
            ->group($webRoutes);
    }

    if (file_exists($apiRoutes)) {
        Route::prefix('api')
            ->middleware('api')
            ->namespace("Modules\\$module\\Http\\Controllers")
            ->group($apiRoutes);
    }
}
