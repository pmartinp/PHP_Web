<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
</head>

<body>

    <?php

    # Nombre
    if (isset($_GET["inputName"])) {
        $nombre = $_GET["inputName"];

        echo $nombre . "<br>";
    }
    # Apellidos
    if (isset($_GET["inputSurname"])) {
        $apellidos = $_GET["inputSurname"];

        echo $apellidos . "<br>";
    }
    # Email
    if (isset($_GET["inputEmail"])) {
        $email = $_GET["inputEmail"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $email . " es válido<br>";
        } else {
            echo $email . " no es válido<br>";
        }
    }
    # URL
    if (isset($_GET["inputURL"])) {
        $formURl = $_GET["inputURL"];
        if (filter_var($formURl, FILTER_VALIDATE_URL)) {
            echo $formURl . " es válido<br>";
        } else {
            echo $formURl . " no es válido<br>";
        }
    }
    # Sexo
    if (isset($_GET["sexo"])) {
        $sexo = $_GET["sexo"];
        if ($sexo == "hombre" || $sexo == "mujer") {
            echo $sexo . " es válido<br>";
        } else {
            echo $sexo . " no es válido<br>";
        }
    }
    # convivientes
    if (isset($_GET["partners"])) {
        $convivientes = $_GET["partners"];
        if (filter_var($convivientes, FILTER_VALIDATE_INT)) {
            echo $convivientes . " es válido<br>";
        } else {
            echo $convivientes . " no es válido<br>";
        }
    }
    # aficiones
    if (isset($_GET["aficiones"])) {
        $aficiones = $_GET["aficiones"];
        $comprobanteAficiones = true;
        $posiblesAficiones = ["cocina", "padel", "viajar", "musica"];
        foreach ($aficiones as $aficion) {
            if (!in_array($aficion, $posiblesAficiones)) {
                $comprobanteAficiones = false;
                break;
            }
        }
        if ($comprobanteAficiones) {
            echo "aficiones válidas: " . implode(",", $aficiones)."<br>";
        } else {
            echo "aficiones no válidas<br>";
        }
    }
    # Menu
    if (isset($_GET["menu"])) {
        $menu = $_GET["menu"];
        $posiblesMenu = ["arroz", "pollo", "salmon", "raviolis"];
        if (in_array($menu, $posiblesMenu)) {
            echo $menu . " es válido<br>";
        } else {
            echo $menu . " no es válido<br>";
        }
    }

    ?>

</body>

</html>