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

if (!isset($_COOKIE['fondo'])) {
    echo "<body>";
} else {
    $fondoBG = $_COOKIE['fondo'];
    echo "<body class='".$fondoBG."'>";
}
?>
    <div class="container p-5">

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle bg-danger" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item bg-primary" href="007bgPrimary.php">Color primario</a></li>
                <li><a class="dropdown-item bg-secondary" href="007bgSecondary.php">Color secundario</a></li>
                <li><a class="dropdown-item bg-success" href="007bgSuccess.php">Color éxito</a></li>
            </ul>
        </div>
    </div>
</body>

</html>