<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Películas</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <script defer src="../js/bootstrap.bundle.js" type="text/javascript"></script>
</head>

<body>

    <?php
    session_start()
    ?>


    <div class="container p-5 justify-content-center d-grid">
        <h1 class="text-center">Listado de películas</h1>

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php 
                if(isset($_SESSION['peliculas'])){
                    echo $_SESSION['peliculas'][0];
                }
                ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php 
                if(isset($_SESSION['peliculas'])){
                    echo $_SESSION['peliculas'][1];
                }
                ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php 
                if(isset($_SESSION['peliculas'])){
                    echo $_SESSION['peliculas'][2];
                }
                ?>
            </li>
        </ul>
        <a name="" id="" class="btn btn-primary bg-secondary" href="014series.php" role="button">Vista Series</a>
    </div>

    <div class="container p-5 justify-content-center d-flex">
        <a name="" id="" class="btn btn-primary bg-danger" href="013logout.php" role="button">Log Out</a>
    </div>
</body>

</html>