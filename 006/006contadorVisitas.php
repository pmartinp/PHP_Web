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
    <div class="container p-5">
        <?php

        if (!isset($_COOKIE['accesos'])) {
            $accesosPagina = 0;
            setcookie('accesos', ++$accesosPagina);
            echo "Es tu primera visita";
        } else {
            $accesosPagina = $_COOKIE['accesos'];
            setcookie('accesos', ++$accesosPagina);
            echo "Has visitado la página " . $accesosPagina . " veces";
        }
        ?>
        <a name="boton" id="boton" class="btn btn-primary" href="006destroy.php" role="button">Reset</a>
    </div>
</body>

</html>