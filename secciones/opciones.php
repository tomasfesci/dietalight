</section>
<?php
  
    if(!defined("ACCESO")){
        header("Location:../index.php?seccion=opciones");
    }

?>
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h2 class="text-center tit">
          Opciones Saludables
        </h2>
        <br>
        <h3 class="text-center" style="color:#69357f;">Ademas de nuestro menu, contamos con diferentes opciones saludables!</h3>
        <br>
      </div>    
      <?php
      $opsaludables=Clases\Opciones::getOpciones();
      foreach($opsaludables as $opcion):
       ?>
      <div class="col-4 offset-md-2 col-md-3">
        <img src="<?= $opcion->getRuta(); ?>" alt="opcion" class="img-fluid img-menu">
        <h4 class="color-text"><?= ucfirst(limpiar_string($opcion->getDescripcion())); ?></h4>
        </div>
        <?php
            endforeach;
        ?>
    </div>
  </div>              
</section>