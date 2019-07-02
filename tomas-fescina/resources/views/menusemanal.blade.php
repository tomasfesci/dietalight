
@extends("web.layout")

@section("contenido")
<?php

if(!defined("ACCESO")){
    header("Location:../index.php?seccion=menusemanal");
}

?>
<section id="menu"> <!-- COMIENZO TABLA -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center tit">
                    Menu Semanal
                </h2>
                <br>
                <h5 class="text-center"><?php echo $msj?></h5>
                <br>
            </div>

            <div class="col-12">
                <table class="table table-bordered  tabla">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center tabla dia">Dia</th>
                        <th scope="col" class="text-center tabla alm-bg">Almuerzo</th>
                        <th scope="col" class="text-center tabla cen-bg">Cena</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $menusemanal= \Clases\MenuSemanal::getAll();
                    foreach ($menusemanal as $m):

                    ?>
                    <tr>
                        <th scope="row" class="text-center tabla diasbg"><?= $m->getDianro(); ?><br><?= $m->getNomdia();?></th>
                        <td class="text-center tabla"><?= $m->getAlmuerzo();?><br><?= $m->getAcompalm();?>
                        </td>
                        <td class="tabla text-center"><?= $m->getCena();?><br><?= $m->getAcompcena(); ?>
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
    @endsection