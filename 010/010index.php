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

<body>
    <form class="row g-3 p-5 needs-validation" action="011login.php" method="POST">
        <!--User-->
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">User</label>
            <input type="text" class="form-control" name="usuario" id="validationCustom01" value="" required>
            <div class="invalid-feedback">
                incorrect User
            </div>
        </div>
        <!--Paswword-->
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Password</label>
            <input type="password" class="form-control" name="contra" id="validationCustom02" value="" required>
            <div class="invalid-feedback">
                incorrect password
            </div>
        </div>
        <!--Submit-->
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="enviar">Iniciar</button>
        </div>
    </form>
</body>

</html>