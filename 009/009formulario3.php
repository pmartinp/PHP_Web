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
    session_start();

    $_SESSION["convivientes"] = $_POST["partners"];
    $_SESSION["aficiones"] = $_POST["aficiones"];
    $_SESSION["menu"] = $_POST["menu"];

    ?>

<div class="container p-5">
<div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Campo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>Nombre</td>
                    <td><?php echo $_SESSION["nombre"];?></td>
                </tr>
                <tr class="">
                    <td>Apellidos</td>
                    <td><?php echo $_SESSION["apellidos"];?></td>
                </tr>
                <tr class="">
                    <td>Email</td>
                    <td><?php echo $_SESSION["email"];?></td>
                </tr>
                <tr class="">
                    <td>URL</td>
                    <td><?php echo $_SESSION["url"];?></td>
                </tr>
                <tr class="">
                    <td>Sexo</td>
                    <td><?php echo $_SESSION["sexo"];?></td>
                </tr>
                <tr class="">
                    <td>Convivientes</td>
                    <td><?php echo $_SESSION["convivientes"];?></td>
                </tr>
                <tr class="">
                    <td>Aficiones</td>
                    <td><?php echo implode(", ", $_SESSION["aficiones"]);?></td>
                </tr>
                <tr class="">
                    <td>Menú</td>
                    <td><?php echo $_SESSION["menu"];?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>