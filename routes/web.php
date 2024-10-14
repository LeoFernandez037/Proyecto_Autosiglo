<?php

use Illuminate\Support\Facades\Route;
// use Spatie\Permission\Models\Role;

// Route::get('/', function () {
//     return view('welcome');
// });

// $role=Role::create(['name'=>'admin']);
// $role=Role::create(['name'=>'empleado']);
// $role=Role::create(['name'=>'cliente']);

Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');
