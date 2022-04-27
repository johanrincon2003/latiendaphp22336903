<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Paises', function() {
    
    $paises = [
        "Colombia" => [ 
            "Capital" => "Bogota", 
            "Moneda" => "Peso Colombiano",
            "Poblacion" => "50'880.000",
            "Ciudades" => [
                "Bogota",
                "Medellin",
                "Cali"
            ]
        ],
        "Peru" => [
            "Capital" => "Lima", 
            "Moneda" => "Soles",
            "Poblacion" => "32'970.000"
        ], 
        "Paraguay" => [
            "Capital" => "Asuncion", 
            "Moneda" => "GuaranÃ­ paraguayo",
            "Poblacion" => "7'133.000"
        ],
        "Ecuador" => [ 
            "Capital" => "Quito", 
            "Moneda" => "Dolar",
            "Poblacion" => "17'400.000"
        ],
        "Brasil" => [
            "Capital" => "Brasilia", 
            "Moneda" => "Reales",
            "Poblacion" => "212'600.000"   
        ]   
    ];

    return view('Paises') ->with('vivideros', $paises);
} );
                                                                              
