<?php

use App\Http\Controllers\PaketController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\WebhostController;
use App\Http\Controllers\WmProjectController;
use App\Http\Controllers\TrMasukController;
use App\Http\Controllers\TrKeluarToroController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\SaldoBankController;
use App\Http\Controllers\RingkasanController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'paket' => PaketController::class,
    'cuti' => CutiController::class,
    'webhost' => WebhostController::class,
    'wmproject' => WmProjectController::class,
    'tr-masuk' => TrMasukController::class,
    'tr-keluar-toro' => TrKeluarToroController::class,
    'theme' => ThemeController::class,
    'skors' => SkorController::class,
    'servers' => ServerController::class,
    'servers' => ServerController::class,
    'saldo-bank' => SaldoBankController::class,
    'ringkasan' => RingkasanController::class
]);
