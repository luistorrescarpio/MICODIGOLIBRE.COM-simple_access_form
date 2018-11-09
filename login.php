<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/theme.css" type="text/css">
</head>

<body>
  <div align="center">
    <br>
    <h2 style='color:blue;'>SIMPLE ACCESO &lt;/FORM&gt;</h2>
    Correo Prueba: <font color='blue'>test@gmail.com</font> / psw:1234</div>
  
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <!-- Message del servidor -->
          <?if(isset($_GET['message'])): ?>
            <h4 style='color:red;'><?=$_GET['message']?></h4>
          <?endif?>
          <div class="card text-dark p-3 bg-light">
            <div class="card-body">
              <h3 class="mb-4">Acceso de Usuario</h3>
              <!-- Formulario para validación de usuario -->
              <form action="my_account.php">
                <div class="form-group"> <label>Correo</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email"> </div>
                <div class="form-group"> <label>Contraseña</label>
                  <input type="password" name="password" class="form-control" placeholder="Password"> </div>
                <button type="submit" class="btn btn-secondary">Ingresar</button>
              </form>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.2.1.js"></script>
  <script src="lib/bootstrap-4.0.0_lite/js/popper.min.js"></script>
  <script src="lib/bootstrap-4.0.0_lite/js/bootstrap.min.js"></script>
</body>

</html>