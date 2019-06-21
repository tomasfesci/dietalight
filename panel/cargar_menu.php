<?php

if(empty($_POST["dianro"])){
    header("Location: index.php?seccion=modif-menu&error=dia");
    die();
}
if(empty($_POST["almuerzo"])){
    header("Location: index.php?seccion=modif-menu&error=almuerzo");
    die();
}

$id_orig = $_POST["id"];

Clases\MenuSemanal::agregarMenu();
if(("../menu-semanal/$id_orig")){
    header("Location: index.php?seccion=modif-menu&error=existe");
    die();
}

mkdir("../menu-semanal/$id_orig");

if(!empty($_POST["dianro"])){
    $dianro = $_POST["dianro"];
    file_put_contents("../menu-semanal/$id_orig/dianro.txt",$dianro);

}
if(!empty($_POST["almuerzo"])){
    $almuerzo = $_POST["almuerzo"];
    $almuerzo_limpio = ucfirst(str_replace("<br />", " ", $almuerzo));
    file_put_contents("../menu-semanal/$id_orig/almuerzo.txt",$almuerzo_limpio);

}
if(!empty($_POST["cena"])){
    $cena = $_POST["cena"];
    $cena_limpio = ucfirst(str_replace("<br />", " ", $cena));
    file_put_contents("../menu-semanal/$id_orig/cena.txt",$cena_limpio);

}

header("Location:index.php?seccion=home&exito=dia_subido&diaid=$id_orig");
?>