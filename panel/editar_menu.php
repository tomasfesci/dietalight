<?php

// require_once("../funciones.php");

if(empty($_POST["id"])){
    header("Location:index.php?seccion=modif-menu&dia=".$_POST["id"]."&error=no_existe");
    die();
}

$menu = $_POST["id"];

if(!is_dir("../menu-semanal/$menu")){
    header("Location:index.php?seccion=modif-menu&dia=".$_POST["id"]."&error=error_dia");
    die();
}


if(!empty($_POST["dianro"]) && $_POST["dianro"] != $dianro):

    $dianro = $_POST["dianro"];
    $dianro_limpio = str_replace("<br />", " ", $dianro);
    file_put_contents("../menu-semanal/$menu/dianro.txt",$dianro_limpio);

endif;

if(!empty($_POST["almuerzo"])){

    $almuerzo = $_POST["almuerzo"];
     $almuerzo_limpio = str_replace("<br />", " ", $almuerzo);
    file_put_contents("../menu-semanal/$menu/almuerzo.txt",$almuerzo_limpio);

}
if(!empty($_POST["cena"])){

    $cena = $_POST["cena"];
    $cena_limpio = str_replace("<br />", " ", $cena);
    file_put_contents("../menu-semanal/$menu/cena.txt",$cena_limpio);

}

header("Location:index.php?seccion=home&exito=dia_editado&diaid=$menu");


