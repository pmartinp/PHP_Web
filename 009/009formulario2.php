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

    $_SESSION["nombre"] = $_POST["inputName"];
    $_SESSION["apellidos"] = $_POST["inputSurname"];
    $_SESSION["email"] = $_POST["inputEmail"];
    $_SESSION["url"] = $_POST["inputURL"];
    $_SESSION["sexo"] = $_POST["sexo"];

    ?>

    <div class="container p-5">
        <form action="009formulario3.php" method="post">
            <!--Convivientes-->
            <div class="mb-3 row">
                <label for="partners" class="col-4 col-form-label">Convivientes</label>
                <div class="col-1">
                    <input type="number" class="form-control" name="partners" id="partners" />
                </div>
            </div>
            <!--Aficiones-->
            <fieldset class="mb-3 row">
                <legend class="col-form-legend col-4">Aficiones</legend>
                <div class="col-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="cocina" name="aficiones[]" id="checkCocina" />
                        <label class="form-check-label" for="checkCocina"> Cocina </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="padel" name="aficiones[]" id="checkPadel" />
                        <label class="form-check-label" for="checkPadel"> Pádel </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="viajar" name="aficiones[]" id="checkViajar" />
                        <label class="form-check-label" for="checkViajar"> Viajar </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="musica" name="aficiones[]" id="checkMusica" />
                        <label class="form-check-label" for="checkMusica"> Música </label>
                    </div>
                </div>
            </fieldset>
            <!--Menú-->
            <div class="mb-3 row">
                <label for="menu" class="col-4 col-form-label">Menú favorito</label>
                <div class="col-8">
                    <select class="form-select" multiple aria-label="Ejemplo de multiple select" name="menu">
                        <option value="arroz" selected>Arroz</option>
                        <option value="pollo">Pollo</option>
                        <option value="salmon">Salmón</option>
                        <option value="raviolis">Raviolis</option>
                    </select>
                </div>
            </div>
            <!--Submit-->
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>