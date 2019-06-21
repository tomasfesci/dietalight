<?php
  
    if(!defined("ACCESO")){
        header("Location:../index.php?seccion=home");
    }

?>
	<main>
		<div class="container-fluid">
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  					<ol class="carousel-indicators">
    					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  					</ol>
  					<div class="carousel-inner">
  						<!--slider 1-->
    					<div class="carousel-item active">
      					<img class="d-block w-100 opac" src="img/slider3opac.jpg" alt="First slide">
      					<div class="carousel-caption d-none d-md-block hom">
                            <p class="text-center tithom">Dieta Light<p>
                            <a href="index.php?seccion=home"><img src="img/dietalogo1.png" alt="logo" class="img-fluid"></a>
                        </div>
    					</div>
    					<!--slider 2-->
    				<div class="carousel-item">
      					<img class="d-block w-100 opac" src="img/slider2opac.jpg" alt="Second slide">
      					<div class="carousel-caption d-none d-md-block hom">
                            <span class="text-center titulohom">Menu Semanal</span>
                            <p class="text-center texthom">En tu casa o en tu lugar de trabajo.
								Un servicio que prioriza la alimentación como base de la buena salud.
								Menúes adaptables para personas diabéticas, hipertensas y/o con sobrepeso.</p>
                            <a href="index.php?seccion=menusemanal">
                                <button class="btn btn-light">Ver</button>
                            </a>
                        </div>
    				</div>
    					<!--slider 3-->
    				<div class="carousel-item">
      					<img class="d-block w-100 opac" src="img/slider1opac.jpg" alt="Third slide">
      					<div class="carousel-caption d-none d-md-block hom">
                            <span class="text-center titulohom">Opciones Saludables</span>
                            <p class="text-center texthom">Ademas de nuestro adaptable menu semanal, contamos con tartas, tarteletas individuales, empanadas, postres y mas!</p>
                            <br>
                            <a href="index.php?seccion=opciones">
                                <button class="btn btn-light">Ver</button>
                            </a>
                        </div>
    				</div>
  					</div>
  						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    						<span class="sr-only">Previous</span>
  						</a>
  						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    						<span class="carousel-control-next-icon" aria-hidden="true"></span>
    						<span class="sr-only">Next</span>
  						</a>
				</div>	
			</div>
		</div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-12 tit">
          <h3 class="text-center articulo tithom">Nutritivo y natural</h3>

          <p class="col-md-6 col-4 float-left text-justify" style="font-size: 18px;"><span style="font-size: 20px; font-weight:bold;">Acerca de</span><br>Dieta Light nutritivo y natural, una empresa chivilcoyana,
          fue una idea de la Lic. María Fernanda Mariani, y hoy es una realidad. 
          Nació hace 20 años, con el claro objetivo de mejorar la calidad de vida de sus clientes a través de una adecuada alimentación.
          La amplia experiencia y pasión le ha permitido optimizar su servicio, volcando todo su conocimiento en su empresa, ofreciendo un producto terminado que se garantiza asimismo, por su calidad, sabor, variedad y presentación  gracias al cuidadoso equilibrio que se guarda en la selección de sus menús, alimentos con que se preparan, los que se encuentran elaborados artesanalmente, respetando al máximos las normas de seguridad e higiene.</p>
          <img class="col-md-6 col-6 float-right img-fluid" src="img/localdieta.jpg" alt=imgdietalight>
        </div>
      </div>
    </div>
	</main>
	