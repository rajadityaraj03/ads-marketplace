<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    try {

        DB::connection()->getPdo();

        return "Database Connected Successfully";

    } catch (\Exception $e) {

        return $e->getMessage();

    }

});