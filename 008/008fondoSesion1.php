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

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle bg-danger" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item bg-primary" href="008bgPrimary.php">Color primario</a></li>
                <li><a class="dropdown-item bg-secondary" href="008bgSecondary.php">Color secundario</a></li>
                <li><a class="dropdown-item bg-success" href="008bgSuccess.php">Color éxito</a></li>
            </ul>
        </div>

        <a name="enlacePag2" id="enlacePag2" class="btn btn-primary bg-dark" href="408fondoSesion2.php" role="button">Enlace fondo2</a>
    </div>
</body>

</html>