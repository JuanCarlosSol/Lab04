<?php
$usuario = $_POST['nombre'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../images/favicon.ico">
  <title>Eercicio2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> 
</head>
<body>
	
  	<div class="container">
        <div class="row">
            <div class="col-sm-9 col-12 mt-5 mx-auto">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <div class="card-tittle text-white"><h1>Bienvenido<h1></div>
                    </div>
					<?php
          				echo "<p> !Hola: " . $usuario . "¡</p>";
          				echo "<p> Tu dirección es " . $direccion . "</p>";
         				  echo "<p> Tienes " . $edad . " y tu correo es " . $email . "</p>";
      				?>
                </div>
            </div>
        </div>
	</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
	