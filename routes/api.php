<?php

use App\Http\Controllers\PaketController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\WebhostController;
use App\Http\Controllers\WmProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'paket' => PaketController::class,
    'cuti' => CutiController::class,
    'webhost' => WebhostController::class,
    'wmproject' => WmProjectController::class
]);
