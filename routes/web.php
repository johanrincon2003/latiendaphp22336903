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

//primera ruta
Route::get ('hola',function() {
echo"hola le dijo la araña a la mosca ";
});
Route::get('paises',function(){
$paises=[
    "colombia"=>[
    "cap"=>"Bogotá",
    "mon"=> "peso",
    "pob"=> 51.6,
    "ciudades"=> [
        "medellin",
        "cali",
        "Barranquilla"
          ]
    ],
        "España"=>[
            "cap"=>"Madrid",
            "mon"=> "Euro",
            "pob"=>  47,44,
            "ciudades"=> [
                "Barcelona",
                "sevilla",
                "granada"
                  ]
            ],
                "Ecuador"=>[
                    "cap"=>"Quito",
                    "mon"=> "dolar",
                    "pob"=>  20,
                    "ciudades"=> [
                        "cuenca ",
                        "guayaquil",
                        "Ambato"
                          ]
                    ],
                    "Italia "=>[
                        "cap"=>"Roma",
                        "mon"=> "Euro",
                        "pob"=>  59.23,
                        "ciudades"=> [
                            "florecia ",
                            "milán",
                            "turin"
                              ]
                        ],
                        "Argentina "=>[
                            "cap"=>"Buenos Aires",
                            "mon"=> "peso argentino",
                            "pob"=>  45.38,
                            "ciudades"=> [
                                "Rosario",
                                "Mendoza",
                                
                                  ]
                                ]
        
    ];
    return view ('paises')
    ->with("paises",$paises );
   
});