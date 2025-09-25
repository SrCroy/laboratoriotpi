<?php


use lib\Route;
use app\controllers\InicioController;
use app\controllers\ContactarController;


Route::get("/", function(){
    echo "RUTA RAIZ";
});


Route::get("/inicio", function(){
    echo "Inicio";
});

Route::get("/home", [InicioController::class, "index"]);

Route::get("/contactos", [ContactarController::class, "contactos"]);

Route::post('/contactos', [ContactarController::class, 'enviarContacto']);


Route::dispatch();




?>
