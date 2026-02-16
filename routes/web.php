<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'name' => config('app.name'),
        'description' => 'LAN Legacy REST API',
        'version' => '0.1.0',
        'status' => 'Active',
        'environment' => app()->environment(),
    ]);
});
