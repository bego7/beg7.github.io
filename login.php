<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/estilosLogin.css">
<link rel="apple-touch-icon" sizes="57x57" href="css/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="css/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="css/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="css/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="css/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="css/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="css/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="css/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="css/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="css/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="css/img/favicon/favicon-16x16.png">
<link rel="manifest" href="css/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<script src="js/lib/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico" rel="stylesheet">
<body>
  <a href="index.php"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a>
  <a href="index.php"><label id="regresar">Regresar</label></a>
  <div class="container" id="fondo">

  </div>

  <form action="login.php" method="post">

    <div class="container" id="mainContainer">
     <h2>Iniciar sesión</h2>
     <label><b>Nombre de usuario</b></label>
     <input type="text" placeholder="Ingresa nombre de usuario" name="username" required>

     <label id="contraseña"><b>Contraseña</b></label>
     <input type="password" placeholder="Ingresa contraseña" name="password" required>
     <a href="register.php" style="color:black">Aún no tienes una cuenta, regístrate</a>
     <div class="clearfix">
       <button type="submit" name="login" class="signupbtn registrate">Iniciar sesión</button>

     </div>
   </div>
 </form>

</body>
</html>
