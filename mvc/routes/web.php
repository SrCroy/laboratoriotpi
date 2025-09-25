<?php


use lib\Route;
use app\controllers\InicioController;


Route::get("/", function(){
    echo "RUTA RAIZ";
});


Route::get("/inicio", function(){
    echo "Inicio";
});

Route::get("/home", [InicioController::class, "index"]);


Route::dispatch();




?>
