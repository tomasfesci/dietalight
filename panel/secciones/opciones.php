<section id="menu"> <!-- COMIENZO TABLA -->
  <div class="container">
<?php
  
    if(!defined("ACCESO")){
        header("Location:../index.php?seccion=opciones");
    }
?>

    <?php

    if(!empty($_GET["exito"])):
      $exito = $_GET["exito"];

        if($exito == "opcion_subida"){
           $mensaje = "Se agrego la opcion " . " '". $_GET["opcion"]."' ";

        }elseif($exito == "opcion_borrada"){
          $mensaje = "Se borró la opcion " . " '". $_GET["opcion"]."' ";

        }elseif($exito == "opcion_editada"){
          $mensaje = "Se editó la opcion " . " '". $_GET["opcion"]."' ";

        }
    ?>  
  <div class="container tit">  
   <div class="alert alert-success alert-dismissible fade show col-4 offset-4 text-center" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
      </button>
      <p class="text-center" style="font-weight: bold; font-size:20px;"><?= $mensaje; ?></p>
    </div>
  </div>  
    <?php
        endif;
    ?>

  <div class="row">
      <div class="col-12">
        <h2 class="text-center tit">
          PANEL GALERIA DIETA LIGHT
        </h2>
      </div>  
      <div class="col-12">
        <table class="table table-bordered tabla">
          <thead>
            <tr>
              <th scope="col" class="text-center">Titulo</th>
              <th scope="col" class="text-center">Descripcion</th>
              <th scope="col" class="text-center">Imagen</th>
              <th scope="col" class="text-center">Acciones</th>
            </tr>
          </thead>
            <tbody>
              <?php
                if(!empty($_GET["error"])):
                  $error = $_GET["error"];
                  if($error == "no_existe"){
                    $mensaje = "Error! Seleccione una opcion"; 
                  }elseif($error == "error_opcion"){
                    $mensaje = "Error! No existe la opcion!";
                  }

              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <p class="text-center" style="font-size: 24px; font-weight: bold;"><?= $mensaje; ?></p>
            </div>

          <?php
            endif;
          ?>
          <?php
          $opsaludables=Clases\Opciones::getOpcionesAfuera();
          foreach($opsaludables as $opcion):

          ?>
                  <tr>
                    <th scope="row" class="text-center"><?= titulo_limpio($opcion->getNombre()); ?><br></th>
                    <td class="text-center"><?= $opcion->getDescripcion(); ?><br></td>
                    <td class="text-center"><img src="<?= $opcion->getRuta(); ?>" alt="<?= $opcion->getNombre(); ?>" width="50"></td>
                      <td class="text-center">
                        <form action="borrar_opcion.php" method="post">
                          <div class="btn-group">
                            <a href="index.php?seccion=cargar_opcion&opcion=<?= $opcion->getNombre(); ?>" class="btn btn-success btn-sm">Editar</a>
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                          </div>
                            <input type="hidden" value="<?= $opcion->getNombre(); ?>" name="id">
                        </form>
                      </td>
                  </tr>
            <?php
                endforeach;

            ?>
          </tbody>

        </table>

        </div>

      </div>

    </div>

</section>