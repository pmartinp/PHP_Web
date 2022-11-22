<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
  </head>
  <body>
    <div class="container p-5">
      <form action="009formulario2.php" method="post">
        <!--Nombre-->
        <div class="mb-3 row">
          <label for="inputName" class="col-4 col-form-label">Nombre</label>
          <div class="col-8">
            <input
              type="text"
              class="form-control"
              name="inputName"
              id="inputName"
              placeholder="Nombre"
            />
          </div>
        </div>
        <!--Apellidos-->
        <div class="mb-3 row">
          <label for="inputSurname" class="col-4 col-form-label"
            >Apellidos</label
          >
          <div class="col-8">
            <input
              type="text"
              class="form-control"
              name="inputSurname"
              id="inputSurname"
              placeholder="Apellidos"
            />
          </div>
        </div>
        <!--Email-->
        <div class="mb-3 row">
          <label for="inputEmail" class="col-4 col-form-label">Email</label>
          <div class="col-8">
            <input
              type="email"
              class="form-control"
              name="inputEmail"
              id="inputEmail"
              aria-describedby="emailHelpId"
              placeholder="abc@mail.com"
            />
          </div>
        </div>
        <!--URL-->
        <div class="mb-3 row">
          <label for="inputURL" class="col-4 col-form-label">URL</label>
          <div class="col-8">
            <input
              type="url"
              class="form-control"
              name="inputURL"
              id="inputURL"
              placeholder="https://example.com/users/"
            />
          </div>
        </div>
        <!--Sexo-->
        <div class="mb-3 row">
          <label for="sexo" class="col-4 col-form-label">Sexo</label>
          <div class="col-8">
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="sexo"
                value="hombre"
                id="hombre"
              />
              <label class="form-check-label" for="hombre"> Hombre </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="sexo"
                value="mujer"
                id="mujer"
                checked
              />
              <label class="form-check-label" for="mujer"> Mujer </label>
            </div>
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
