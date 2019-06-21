<section id="menu"> <!-- COMIENZO TABLA -->
  <div class="container">
<?php
    if(!defined("ACCESO")){
        header("Location:../index.php?seccion=home");
    }
?>

<?php

    if(!empty($_GET["exito"])):
      $exito = $_GET["exito"];

        if($exito == "dia_subido"){
           $mensaje = "Se agrego el dia " . $_GET["diaid"];

        }elseif($exito == "dia_borrado"){
          $mensaje = "Se borró el dia " . $_GET["diaid"];

        }elseif($exito == "dia_editado"){
          $mensaje = "Se editó el dia " . $_GET["diaid"];

        }

?>  
  <div class="container tit">  
   <div class="alert alert-success alert-dismissible fade show col-4 offset-4 text-center" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
      </button>
      <p><?= $mensaje; ?></p>
    </div>
  </div>  
    <?php
        endif;
    ?>

  <div class="row">
      <div class="col-12">
        <h2 class="text-center tit">
          PANEL MENU DIETA LIGHT
        </h2>
          <br>
      </div>  
      <div class="col-12">
        <table class="table table-bordered tabla">
          <thead>
            <tr>
              <th scope="col" class="text-center">Dia</th>
              <th scope="col" class="text-center">Almuerzo</th>
              <th scope="col" class="text-center">Cena</th>
            </tr>
          </thead>
            <tbody>
              <?php
                if(!empty($_GET["error"])):
                  $error = $_GET["error"];
                  if($error == "no_existe"){
                    $mensaje = "Error! Seleccione un dia"; 
                  }elseif($error == "error_dia"){
                    $mensaje = "Error! No existe el dia!";
                  }

              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <p><?= $mensaje; ?></p>
            </div>

          <?php
            endif;
          ?>
          <?php
              $menu = \Clases\MenuSemanal::getAll();
              foreach($menu as $menu1):
          ?>

              <tr>
                   <th scope="row" class="text-center"><?= $menu1->getDianro(); ?><br><?= $menu1->getNomdia(); ?>     </th>
                    <td class="text-center"><?= $menu1->getAlmuerzo();?><br><?= $menu1->getAcompalm(); ?></td>
                    <td class="text-center"><?= $menu1->getCena();?> <br> <?= $menu1->getAcompcena(); ?></td>
                      <td>
                        <form action="borrar_dia.php" method="post">
                          <div class="btn-group">
                            <a href="index.php?seccion=modif-menu&dia=<?= $menu1->getId() ?>" class="btn btn-success btn-sm">Editar</a>
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                          </div>
                           <!-- <input type="hidden" value="<?= $menu1->getId() ?>" name="id"> -->
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