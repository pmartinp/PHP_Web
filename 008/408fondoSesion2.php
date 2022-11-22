<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <script defer src="../js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<?php
session_start();
if (!isset($_SESSION['fondo'])) {
    echo "<body>";
} else {
    $fondoBG = $_SESSION['fondo'];
    echo "<body class='".$fondoBG."'>";
}
?>
    <div class="container p-5">


        <a name="enlacePag1" id="enlacePag1" class="btn btn-primary bg-dark" href="008fondoSesion1.php" role="button">Volver</a>
        <a name="enlaceDestroy" id="enlaceDestroy" class="btn btn-primary bg-danger" href="sessionDestroy.php" role="button">Vaciar Sesión</a>
    </div>
</body>

</html>