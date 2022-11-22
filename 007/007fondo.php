<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
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
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item bg-primary" href="#">Action</a></li>
                <li><a class="dropdown-item bg-secondary" href="#">Another action</a></li>
                <li><a class="dropdown-item bg-success" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</body>

</html>