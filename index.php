
<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
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
  <meta name="theme-color" content="#ffffff">
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX2NwUrBAhzVQATvm8i0Bgu7XM3_yq0g0&callback=myMap">
</script>
<script src="js/lib/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<script src="js/scripts.js"></script>

</head>

<title>Biohuacal</title>

</head>
<body>
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item ">INICIO</a>
      <a href="#nosotros" class="w3-bar-item  w3-hide-small"><i class="fa fa-user"></i> ACERCA DE NOSOTROS</a>
      <a href="#portfolio" class="w3-bar-item  w3-hide-small"><i class="fa fa-th"></i> PRODUCTOS</a>
      <a href="#contact" class="w3-bar-item  w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
      <a href="login.php" class="w3-bar-item  w3-hide-small"><i class="fa fa-unlock"></i> INICIAR SESIÓN</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#home" class="w3-bar-item w3-button chiquito" onclick="toggleFunction()">INICIO</a>
      <a href="#nosotros" class="w3-bar-item w3-button chiquito" onclick="toggleFunction()">ACERCA DE NOSOTROS</a>
      <a href="#portfolio" class="w3-bar-item w3-button chiquito" onclick="toggleFunction()">PRODUCTOS</a>
      <a href="#contact" class="w3-bar-item w3-button chiquito" onclick="toggleFunction()">CONTACTO</a>
      <a href="login.php" class="w3-bar-item w3-button chiquito" onclick="toggleFunction()">INICIAR SESIÓN</a>
    </div>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <h1 class="animated slideInRight" id="animable">¡Mercado <b>órganico a domicilio!<b></h1>
        <h4 class="animated slideInRight" id="animable">Oaxaca México</h4>
        <span><img class ="logo" id="loguito" src="css/img/logo.png" alt=""></span>
      </div>
    </div>

    <h2 class="w3-center" id="nosotros">SOBRE NOSOTROS</h1> 
      <br>
      <div class="bgimg-7 w3-display-container w3-opacity-min w3-col m12 ">

        <div class="w3-col m4 image is-hidden contenedor w3-display-container">
          <h5><b>MISIÓN</b></h5>
          <i class="fa fa-sun-o icono animar material-icons" id="animable2"aria-hidden="true"></i>
          <p class="animar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit exercitationem magnam iure necessitatibus aspernatur alias voluptatem tempore quisquam nam porro dicta accusantium perferendis</p>
        </div>

        <div class=" w3-col m4 image is-hidden contenedor w3-display-container">
          <i class="fa fa-envira icono animar material-icons " id="animable2" aria-hidden="true"></i>
          <h5><b>VISIÓN</b></h5>
          <p class="animar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit exercitationem magnam iure necessitatibus aspernatur alias voluptatem tempore quisquam nam porro dicta accusantium perferendis</p>
        </div>

        <div class=" w3-col m4 image is-hidden contenedor w3-display-container">
          <i class="fa fa-pagelines icono animar material-icons " id="animable2" aria-hidden="true"></i>
          <h5><b>VALORES</b></h5>
          <p class="animar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit exercitationem magnam iure necessitatibus aspernatur alias voluptatem tempore quisquam nam porro dicta accusantium perferendis</p>
        </div>
      </div>

      <!-- Container (About Section) -->



      <!-- Second Parallax Image with Portfolio Text -->


      <!-- Container (Portfolio Section) -->
      <div >
        <h2 class="w3-center" >NUESTROS PRODUCTOS</h1> 
          <br>

          <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
          <div class="we-row catalogo" id="portfolio" >
            <div class="w3-col m4 image is-hidden contenedor w3-display-container post">
              <img src="css/img/menta.jpg" style="width:100%"  alt="Menta">
              <a href="#proteinas"><div class="post-s huevo">
                <h2>HIERBAS Y FLORES</h2>
              </div></a>
            </div>

            <div class="w3-col m4 image is-hidden contenedor">
              <img src="css/img/brocoli.jpg" style="width:100%"  alt="Brócoli">
              <a href="#proteinas"><div class="post-s  huevo">
               <h2>VERDURAS</h2>
             </div>
             </a>
           </div>


           <div class="w3-col m4 image is-hidden catalogo post">
            <img src="css/img/uvas.jpg" style="width:100%" alt="Frutitas">
            <a href="#proteinas"><div class="post-s huevo">
              <h2>FRUTAS</h2>
            </div>
            </a>
          </div>
        </div>

        <div class="w3-row">
          <div class="w3-col m4 image is-hidden catalogo post">
            <img src="css/img/huevos.jpg" style="width:100%"   alt="Huevo">
         <a href="#proteinas"> <div class="post-s huevo" ">
              <h2 >PROTEÍNA</h2>
            </div>
           </a>
        </div>
        
       

        <div class="w3-col m4 image is-hidden post">
          <img src="css/img/lechuga.jpg" style="width:100%" alt="Lechuga">
            <a href="#proteinas"> <div class="post-s huevo">
                <h2>HOJAS</h2>
            </div>
          </a>
        </div>



     <div class="w3-col m4 image is-hidden post">
      <img src="css/img/miscelaneos.jpg" style="width:100%"  alt="Miscelaneos">
      <a href="#proteinas"><div class="post-s huevo">
        <h2>MISCELÁNEOS</h2> 
      </div>
      </a>
    </div>
  </div>
</div>
</div>

<div class="container  db visiDb " id="proteinas">
  <div class="row">
    <h2 class="w3-center">SELECCIONA TUS PRODUCTOS <span class="glyphicon glyphicon-remove"></span></h2>
  </div>
  <div class="row">
    <!--<p>
      <a href="create.php" class="btn btn-success">Agregar un Auto</a>
    </p>-->

    <table class="table table-striped table-bordered">
      <?php 
      if ( !empty($_POST)) {
    
  $cantidad = $_POST['sdf'];
  
    }
      ?>   
         <thead>
        <tr>                     
          <th>Nombre  </th>
          <th>Precio      </th>   
          <th>Stock     </th>                                               
        </tr>
      </thead>
      <tbody>
         <form class="form-horizontal" action="index.php" method="post">
        <?php 
        
        include 'database.php';
        $cont = 0;
        $pdo = Database::connect();
        $sql = 'SELECT * FROM proteinas ';
       
        foreach ($pdo->query($sql) as $row) {
          //$id= $row['id'];
          //echo $id;

          echo '<tr>';                  
          echo '<td>'. $row['Nombre'] . '</td>';
          echo '<td>'. "$".$row['Precio'] . '</td>';
          echo '<td>'. $row['Stock'] . '</td>';
          echo '<td width=250>';
          echo '<input name = "sdf" type= "number" class="input-text qty text" step="1" min="0" max="'. $row['Stock'] .'" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">' ;
          echo '</td>';
          echo '</tr>';
   
        }
        //echo $cantidad;
        Database::disconnect();
        ?>
          <!--<button type="submit" class="btn btn-success">Agregar</button>
        <td>hola </td>;-->
      </tbody>
    </table>
  </form>
  </div>


</div> <!-- /container -->


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


<!-- Third Parallax Image with Portfolio Text -->
<h2 class="w3-center" id="nosotros">CONTÁCTANOS</h1> 
  <br>
  <div class="bgimg-3 w3-display-container w3-opacity-min">

    <div class="w3-content w3-container w3-padding-64" id="contact">


      <!--<p class="w3-center"><em>I'd love your feedback!</em></p>-->

      <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
          <!-- Add Google Maps -->
          <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
        </div>
        <div class="w3-col m8 w3-panel">
          <div class="w3-large w3-margin-bottom">
            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Oaxaca, México<br>
            <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 951 1680034<br>
            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: biohuacal@gmail.com<br>
          </div>

          <form method="post" action="send_script.php" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" minlength="3" maxlength="30" placeholder="Nombre" required name="name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="email" size="32" minlength="10" maxlength="64"placeholder="Email" required name="email">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Mensaje" size="32" minlength="10" maxlength="100"required name="msg">
            <a href="http://formvalidation.io/validators/emailAddress/"><button class="w3-button w3-black w3-right w3-section" name="send_message_btn" type="submit">
              <i class="fa fa-paper-plane"></i> Enviar mensaje
            </button>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Container (Contact Section) -->

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right arrow"></i>SUBIR</a>
    <div class="w3-xlarge w3-section">
      <a href="https://www.facebook.com/search/top/?q=biohuacal" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity fa-2x"></i></a>
      <a href="https://www.instagram.com/biohuacal/" target="_blank"><i class="fa fa-instagram w3-hover-opacity fa-2x"></i></a>
      <a href="https://twitter.com/biohuacal?lang=es" target="_blank"><i class="fa fa-twitter w3-hover-opacity fa-2x"></i></a>
    </div>
    
  </footer>


<script>
  //var $icono=$('.glyphicon');
    $('.glyphicon').on("click",function(){
      $db.addClass("visiDb");
    });

  var $db= $(".db");
  $(".post-s").on("click",function(){
      $db.toggleClass("visiDb");
  });

  
   
</script>


</body>
</html>