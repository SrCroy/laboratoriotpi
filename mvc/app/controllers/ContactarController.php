<?php
namespace app\controllers;

class ContactarController {

    public function view($vista) {
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "vista no encontrada ../app/views/$vista.php";
        }
        return "hola desde la pagina Home";
    }

    public function contactos(){
        return $this->view('contactos');
    }

    public function enviarContacto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $dui = $_POST['dui'] ?? '';

            $errores = [];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores[] = "Correo electrónico inválido.";
            }

            if (!preg_match('/^\d{4}-\d{4}$/', $telefono)) {
                $errores[] = "Número de teléfono inválido. Debe ser formato 7123-4567.";
            }

            if (!preg_match('/^\d{8}-\d{1}$/', $dui)) {
                $errores[] = "Número de DUI inválido. Debe ser formato 01234567-8.";
            }

            if (!empty($errores)) {
                foreach ($errores as $error) {
                    echo "<p style='color:red;'>$error</p>";
                }
                return $this->view('contactos');
            } else {
                echo "<h2>Datos recibidos correctamente</h2>";
                echo "<p><strong>Correo:</strong> " . htmlspecialchars($email) . "</p>";
                echo "<p><strong>Teléfono:</strong> " . htmlspecialchars($telefono) . "</p>";
                echo "<p><strong>DUI:</strong> " . htmlspecialchars($dui) . "</p>";
            }
        } else {
            return $this->view('contactos');
        }
    }
}
?>
