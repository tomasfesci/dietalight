<?php

if(empty($_POST["id"])):
    header("Location: index.php?seccion=opciones&error=no_existe");
    die();
endif;

$opcion = $_POST["id"];

if(!is_dir("../opciones/$opcion")):
    header("Location: index.php?seccion=opciones&error=error_opcion");
    die();
endif;


$carpeta = opendir("../opciones/$opcion");

while($archivo = readdir($carpeta)):

    if($archivo != "." && $archivo != ".."):

        unlink("../opciones/$opcion/$archivo");

    endif;

endwhile;

closedir($carpeta);

rmdir("../opciones/$opcion");

header("Location:index.php?seccion=opciones&exito=opcion_borrada&opcion=$opcion");