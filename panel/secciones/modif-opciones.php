<?php

if(!defined("ACCESO")){
        header("Location:../index.php?seccion=cargar_opcion");
    }

    $titulo = "Cargar";
    $accion = "cargar_opcion.php";
    
    if(!empty($_GET["opcion"])):
        $titulo = "Modificar";
        $accion = "editar_opcion.php";

        $opcion = $_GET["opcion"];


        if(!is_dir("../opciones/$opcion")){
            header("Location: index.php?seccion=opciones&error=error_opcion");
            die();
        
        }
        $descripcion = imprimir_detalle("../opciones/$opcion/descripcion.txt","descripcion");
        $img = count(glob("../opciones/$opcion/$opcion.*")) > 0 ? glob("../opciones/$opcion/$opcion.*")[0] : null;
    endif;
?>



<div class="containter">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center tit"><?= $titulo?> opcion saludable</h2>
		</div>
	</div>
</div>
<div class="container">
	<?php

            if(!empty($_GET["error"])):
                $error = $_GET["error"];
                
                if($error == "opcion"):
                    $mensaje = "El campo opcion es obligatorio";
                elseif($error == "existe"):
                    $mensaje = "La opcion saludable ya existe";
                
                elseif($error== "descripcion"):
                    $mensaje = "El campo descripcion es obligatorio";
                endif;
                
            ?>
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show text-center col-6 offset-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Error: </strong> <?php echo $mensaje ?>.
                </div>
            </div>	 

            <?php
            endif;

            ?>
	<div class="row">
		<div class="col-12 text-center">
            <?php
              if(isset($opcion)):
            ?>
        	<input type="hidden" name="id" value="<?= $opcion; ?>">
        	<?php
        		endif
        	?>
                <div class="col-6 offset-3">
                    <form action="<?= $accion ?>" method="POST" enctype="multipart/form-data" class="bg-light">
                        <div class="form-group">
                        <label>Opcion Saludable Titulo</label>
                        <input type="text" name="opcion" id="opcion" class="form-control text-center" value="<?= isset($opcion) ? $opcion : null ?>">
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea type="text" name="descripcion" id="descripcion" class="form-control text-center" aria-describedby="help_descripcion"><?= isset($descripcion) ? $descripcion : null ?></textarea>
                            <small id="help_descripcion" class="text-muted">Breve descripcion de la comida</small>
                        </div>
                        <div class="form-group text-center">
                            <label for="imagen">Foto</label>
                            <input type="file" accept="image/png,image/jpeg,image/gif" class="form-control-file" name="imagen" id="imagen" aria-describedby="help_imagen">
                        <?php
                    if(isset($img)):     
                        ?>    
                        <img src="<?= $img ?>" alt="foto_opcion" width="150">
                  <?php
                    endif;
                  ?>
                    <small id="help_imagen" class="form-text text-muted">La imágen de la opcion saludable debe ser en formato png, jpg o gif.</small>
                    </div> 
                        <button type="submit" class="btn btn-success btn-lg"><?= $titulo?></button>
                    </form>       
                </div>
		</div>
	</div>
</div>