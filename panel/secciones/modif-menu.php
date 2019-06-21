<?php

if(!defined("ACCESO")){
        header("Location:../index.php?seccion=cargar_menu");
    }

    $titulo = "Cargar";
    $accion = "cargar_menu.php";
    
    if(!empty($_GET["dia"])):
        $titulo = "Modificar";
        $accion = "editar_menu.php";

        $menu = $_GET["dia"];


        if(!is_dir("../menu-semanal/$menu")){
            header("Location: index.php?seccion=lista_menu&error=error_dia");
            die();
        
        }
        $dianro = imprimir_detalle("../menu-semanal/$menu/dianro.txt","dianro");
        $almuerzo = imprimir_detalle("../menu-semanal/$menu/almuerzo.txt","almuerzo");
        $cena = imprimir_detalle("../menu-semanal/$menu/cena.txt","cena");
    endif;

    	// $dianro1 = imprimir_detalle("../menu-semanal/$menu/dianro.txt","dianro1");
    	// $almuerzo1 = imprimir_detalle("../menu-semanal/$menu/almuerzo.txt","almuerzo1");
    	// $cena1 = imprimir_detalle("../menu-semanal/$menu/cena.txt","cena1");
?>



<div class="containter">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center tit"><?= $titulo?> dia de menu semanal</h2>
		</div>
	</div>
</div>
<div class="container">
	<?php

            if(!empty($_GET["error"])):
                $error = $_GET["error"];
                
                if($error == "dia"):
                    $mensaje = "El campo Dia es obligatorio";
                elseif($error == "existe"):
                    $mensaje = "El dia ya existe";
                
                elseif($error== "almuerzo"):
                    $mensaje = "El campo almuerzo es obligatorio";
                endif;
                
            ?>
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show text-center col-6 offset-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Error: </strong> <?= $mensaje ?>.
                </div>
            </div>	 

            <?php
            endif;

            ?>
	<div class="row">
		<div class="col-12 text-center">
            <?php
              if(isset($menu)):
            ?>
        	<input type="hidden" name="id" value="<?= $menu; ?>">
        	<?php
        		endif
        	?>
                <div class="col-6 offset-3">
                	<form action="<?= $accion ?>" method="POST" class="bg-light">
                        <div class="form-group">
                        <label>ID Dia (orden de numero en la semana)</label>
                        <input type="text" name="id" id="id" class="form-control text-center" value="<?= isset($menu) ? $menu : null ?>">
                        </div>
                		<div class="form-group">
                		<label>Dia</label>
                    	<input type="text" name="dianro" id="dianro" class="form-control text-center" placeholder="DiaNro<br />Dia" value="<?= isset($dianro) ? $dianro : null ?>">
                		</div>
                		<div class="form-group">
                			<label>Almuerzo</label>
                			<textarea type="text" name="almuerzo" id="almuerzo" class="form-control text-center" aria-describedby="help_descripcion"><?= isset($almuerzo) ? $almuerzo : null ?></textarea>
                  			<small id="help_descripcion" class="text-muted">Salto de linea para diferenciar dos comidas</small>
                		</div>
                		<div class="form-group">
                			<label>Cena</label>
                			<textarea type="text" name="cena" id="cena" class="form-control text-center" aria-describedby="help_descripcion"><?= isset($cena) ? $cena : null ?></textarea>
                  			<small id="help_descripcion" class="text-muted">Salto de linea para diferenciar dos comidas</small>
                		</div>
                		<button type="submit" class="btn btn-success btn-lg"><?= $titulo?></button>
                	</form>
                              
                        </td>
                </div>	

		</div>
	</div>
</div>