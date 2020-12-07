<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login with PHP</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script type="text/javascript" src="src/services/mensajes.js"> </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<script>
  function verificar() {
    <
    ? php
    switch ($_REQUEST['error']) {
      case '1';
      echo 'error("Tu usuario o contraseña están incorrectos, favor de verificar");';
      break;
      case '2';
      echo 'error("Tu sesión ha caducado, favor de verificar");';
      break;
      case '3';
      echo 'error("Gracias por su visita!");';
      break;
    } ?
    >
  }
</script>

<body onLoad="verificar();">
  <div class="container" style="margin-top:20px">
    <div class="card">
      <H2 style="text-align: center;" class="card-title"> Login With PHP </H2>
      <div class="card-body" style="text-align: center;">

        <form action="validar.php" method="post">
          <div data-validate="Please enter username">
            <input class="form-control" type="text" name="Usuario" id="Usuario" placeholder="Usuario" required>
          </div>

          <div data-validate="Please enter password">
            <input class="form-control" type="password" name="Contrasena" id="Contrasena" placeholder="Password"
              required>
          </div>

          <button type="submit" class="btn btn-lg btn-outline-success"> Entrar</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>