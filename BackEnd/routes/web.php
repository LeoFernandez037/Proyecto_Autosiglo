<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // if (DB::connection()->getDatabaseName()) {
    //     echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    // }
    // $data = DB::select('select * from [db_autosiglo_v3].[dbo].[Persona]');
    // $nombre = $data[0]->NOMBRES;
    // $apellidopat = $data[0]->AP_PATERNO;
    // $apellidomat = $data[0]->AP_MATERNO;

    // echo "<h1>Nombre de usuario: ";
    // echo $nombre;
    // echo "</h1>";
    // echo "<h1>Apellido paterno de usuario: ";
    // echo $apellidopat;
    // echo "</h1>";
    // echo "<h1>Apellido materno usuario: ";
    // echo $apellidomat;
    // echo "</h1>";
});
