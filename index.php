<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dieta light</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <?php include("arrays.php");
        include("configuraciones.php");
        include("funciones.php");
        require_once 'vendor/autoload.php';

  ?>

</head>
<body class="col-bg">

	<header id="header" class="">
    	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
      	<div class="container">
      		<a href="index.php?seccion=home"><img src="img/dietalogomini.png" alt="logomini" class="navbar-brand"></a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         	<span class="navbar-toggler-icon"></span>
        	</button>
        	<div class="collapse navbar-collapse" id="navbarResponsive">
          		<ul class="navbar-nav ml-auto">
            	<li class="nav-item">
              	<a class="nav-link" style="color:#fff" href="index.php?seccion=home">Inicio
                	<span class="sr-only">(current)</span>
              	</a>
            	</li>
              <?php
              foreach ($nav as $navitem):
              ?>
            	<li class="nav-item">
              		<a class="nav-link" style="color:#fff;" href=<?php echo $navitem["ruta"]; ?> ><?php echo $navitem["nav"] ?> </a>
            	</li>
              <?php endforeach;
              ?>
          		</ul>
        	</div>
      	</div>
    	</nav>
</header>


<!-- CONTENIDO BODY -->
<?php

        if(!empty($_GET["seccion"])):
            $seccion = $_GET["seccion"];

            if($seccion == "home")
                require_once("secciones/home.php");

            else if($seccion == "menusemanal")
                require_once("secciones/menusemanal.php");
                
            else if($seccion == "opciones")
                require_once("secciones/opciones.php");

            else if($seccion == "contacto")
                require_once("secciones/contacto.php");

            else if($seccion == "contacto?error=true")
                require_once("secciones/contacto.php");

            else if($seccion == "gracias")
               require_once("gracias.php");
            else
                require_once("404.php");
        else:
             require_once("secciones/home.php");     
        endif;
       
    ?>

<footer>
    <div class="container-fluid bg-foot">
      <div class="row">
        <div class="col-12">
          <p class="text-center">Dieta Light 2018. All Rights Reserved.</p>
        </div>
          
      </div>
    </div>
  </footer>

   <!--=============jquery==================-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
