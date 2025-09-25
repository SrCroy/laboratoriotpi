<?php
namespace app\controllers;
class InicioController{
    public function view($vista){
        //require_once("../app/views/HomeView.php");
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "vista no encotrada ../app/views/$vista.php";
        }
        return "hola desde la pagina Home";


    }

    public function index(){
        return $this->view('InicioController');
    }

}
?>