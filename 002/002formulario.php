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

$nombre = $_GET["inputName"];
$apellidos = $_GET["inputSurname"];
$email = $_GET["inputEmail"];
$formURl = $_GET["inputURL"];
$sexo = $_GET["sexo"];
$convivientes = $_GET["partners"];
$aficiones = $_GET["aficiones"];
$menu = $_GET["menu"];
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
                    <td><?php echo $nombre;?></td>
                </tr>
                <tr class="">
                    <td>Apellidos</td>
                    <td><?php echo $apellidos;?></td>
                </tr>
                <tr class="">
                    <td>Email</td>
                    <td><?php echo $email;?></td>
                </tr>
                <tr class="">
                    <td>URL</td>
                    <td><?php echo $formURl;?></td>
                </tr>
                <tr class="">
                    <td>Sexo</td>
                    <td><?php echo $sexo;?></td>
                </tr>
                <tr class="">
                    <td>Convivientes</td>
                    <td><?php echo $convivientes;?></td>
                </tr>
                <tr class="">
                    <td>Aficiones</td>
                    <td><?php echo implode(", ", $aficiones);?></td>
                </tr>
                <tr class="">
                    <td>Menú</td>
                    <td><?php echo $menu;?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>