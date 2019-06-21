<?php

// require_once("../funciones.php");

if(empty($_POST["opcion"])){
    header("Location:index.php?seccion=mcargar_op&opcion=".$_POST["opcion"]."&error=no_existe");
    die();
}

$opcion = $_POST["opcion"];

if(!is_dir("../opciones/$opcion")){
    header("Location:index.php?seccion=cargar_opcion&opcion=".$_POST["opcion"]."&error=error_opcion");
    die();
}


// if(!empty($_POST["opcion"]) && $_POST["opcion"] != $opcion):

//     $opcion = $_POST["opcion"];
//     $opcion_limpio = str_replace("<br />", " ", $opcion);
//     file_put_contents("../opciones/$opcion'/opcion.txt'",$opcion_limpio);

// endif;

if(!empty($_POST["descripcion"])){

    $descripcion = $_POST["descripcion"];
     $descripcion_limpio = str_replace("<br />", " ", $descripcion);
    file_put_contents("../opciones/$opcion/descripcion.txt",$descripcion_limpio);

}
if(!empty($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0 ){
  move_uploaded_file($_FILES["imagen"]["tmp_name"],"../opciones/$opcion/$opcion.png");

}

header("Location:index.php?seccion=opciones&exito=opcion_editada&opcion=$opcion");


