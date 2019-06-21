<?php
    if(empty($_GET["nombre"])){
        header("Location:404.php");
        die();
    }

    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];    
    $email = $_GET["email"];
    $consulta = $_GET["consulta"];
    $tipoconsul = $_GET["tipoconsul"];
?>

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

</head>
<body class="col-bg">

	<header id="header" class="">
    	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
      	<div class="container">
      		<img src="img/dietalogomini.png" alt="logomini" class="navbar-brand">
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         	<span class="navbar-toggler-icon"></span>
        	</button>
        	<div class="collapse navbar-collapse" id="navbarResponsive">
          		<ul class="navbar-nav ml-auto">
            	<li class="nav-item active">
              	<a class="nav-link" style="color:#fff" href="index.php?seccion=home">Inicio
                	<span class="sr-only">(current)</span>
              	</a>
            	</li>
            	<li class="nav-item">
              		<a class="nav-link" style="color:#fff" href="index.php?seccion=menusemanal">Menu Semanal</a>
            	</li>
            	<li class="nav-item">
              		<a class="nav-link" style="color:#fff" href="index.php?seccion=opciones">Opciones Saludables</a>
            	</li>
            	<li class="nav-item">
              		<a class="nav-link" style="color:#fff" href="index.php?seccion=contacto">Contacto</a>
            	</li>
          		</ul>
        	</div>
      	</div>
    	</nav>
	</header><!-- /header -->
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="h3 text-center" style="margin: 5% 0 5%;">¡Su consulta fue enviada con <b class="text-primary">exito</b>!</p>
            <p class="h4 text-center">Nombre: <?= $nombre ?></p>
            <p class="h4 text-center">Apellido: <?= $apellido ?></p>
            <p class="h4 text-center">Email: <?= $email ?></p>
            <p class="h4 text-center">Mensaje: <?= $consulta ?></p>
            <p class="h4 text-center">Tipo de consulta: <?= $tipoconsul ?></p>
            <? if(!empty($tipoconsul)){
              echo "nada"
            }
            ?>
            <a href="index.php?seccion=contacto" class="text-right"><p class=""> Volver</p></a>
             
          </div>
        </div>
      </div> 
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