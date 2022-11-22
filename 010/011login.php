<?php
// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['contra'];

    // validamos que recibimos ambos parámetros
    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña";
        include_once("010index.php");
    } else {
        if ($usuario == "usuario" && $password == "usuario") {
            // almacenamos el usuario en la sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['peliculas'] = ["Gladiator","El Señor de los Anillos", "Blade Runner"];
            $_SESSION['series'] = ["Juego de Tronos","Suits (La clave del éxito)", "The Office"];
            // cargamos la página principal
            header("Location: 012peliculas.php");
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
            $error = "Usuario o contraseña no válidos!";
            include_once("010index.php");
        }
    }
}