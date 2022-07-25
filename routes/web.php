<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SiteController;

Route::get("data", [SiteController::class, "index"]);

//...

