<?php
use Illuminate\Support\Facades\Route;

Route::prefix("api")->group(function () {
    require base_path("routes/api.php");
});

Route::get("/", function () {
    return view("welcome");
});
