<?php

if(empty($_POST["opcion"])){
    header("Location: index.php?seccion=cargar_opcion&error=opcion");
    die();
}
if(empty($_POST["descripcion"])){
    header("Location: index.php?seccion=cargar_opcion&error=descripcion");
    die();
}

$opcion_orig = $_POST["opcion"];

if(is_dir("../opciones/$opcion_orig")){
    header("Location: index.php?seccion=cargar_opcion&error=existe");
    die();
}

mkdir("../opciones/$opcion_orig");

$img = $_FILES["imagen"];

if($img["type"] == "image/jpeg"):
    $formato = "jpg";
    $imgOriginal = imagecreatefromjpeg($img["tmp_name"]);
    $anchoOriginal = imagesx($imgOriginal);
    $altoOriginal = imagesy($imgOriginal);

    $anchoNuevo = 175;
    $altoNuevo = round(($anchoNuevo * $altoOriginal) / $anchoOriginal);

    $imgCopia = imagecreatetruecolor($anchoNuevo,$altoNuevo);
elseif($img["type"] == "image/png"):
    $formato = "png";

    $imgOriginal = imagecreatefrompng($img["tmp_name"]);

    $anchoOriginal = imagesx($imgOriginal);
    $altoOriginal = imagesy($imgOriginal);
    
    $anchoNuevo = 175;

    if($anchoOriginal < $anchoNuevo){
        $anchoNuevo = $anchoOriginal;
    }

    $altoNuevo = round(($anchoNuevo * $altoOriginal) / $anchoOriginal);

    $imgCopia = imagecreatetruecolor($anchoNuevo,$altoNuevo);
    

    imagesavealpha($imgCopia,true);
    imagealphablending($imgCopia,false);
elseif($img["type"] == "image/gif"):
    $formato = "gif";

    $imgOriginal = imagecreatefromgif($img["tmp_name"]);


    $anchoOriginal = imagesx($imgOriginal);
    $altoOriginal = imagesy($imgOriginal);

    $anchoNuevo = 175;
    $altoNuevo = round(($anchoNuevo * $altoOriginal) / $anchoOriginal);
    $imgCopia = imagecreatetruecolor($anchoNuevo,$altoNuevo);
    imagesavealpha($imgCopia,true);
    imagealphablending($imgCopia,false);
endif;

imagecopyresampled($imgCopia,$imgOriginal,0,0,0,0,$anchoNuevo,$altoNuevo,$anchoOriginal,$altoOriginal);

if($formato == "jpg"):
    imagejpeg($imgCopia,"../opciones/$opcion_orig/$opcion_orig.$formato",70);

elseif($formato == "png"):
    imagepng($imgCopia,"../opciones/$opcion_orig/$opcion_orig.$formato",5);

elseif($formato == "gif"):
    imagegif($imgCopia,"../opciones/$opcion_orig/$opcion_orig.$formato",5);

endif;

imagedestroy($imgCopia);
if(!empty($_POST["descripcion"])){
    $descripcion = $_POST["descripcion"];
    $descripcion_limpio = ucfirst(str_replace("<br />", " ", $descripcion));
    file_put_contents("../opciones/$opcion_orig/descripcion.txt",$descripcion_limpio);

}

if(!empty($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0 ){
  move_uploaded_file($_FILES["imagen"]["tmp_name"],"../opciones/$opcion_orig/$opcion_orig.png");

}
header("Location:index.php?seccion=opciones&exito=opcion_subida&opcion=$opcion_orig");
?>