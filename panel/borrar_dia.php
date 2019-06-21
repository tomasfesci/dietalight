<?php

if(empty($_POST["id"])):
    header("Location: index.php?seccion=home&error=no_existe");
    die();
endif;

$menu = $_POST["id"];

if(!is_dir("../menu-semanal/$menu")):
    header("Location: index.php?seccion=home&error=error_dia");
    die();
endif;


$carpeta = opendir("../menu-semanal/$menu");

while($txt = readdir($carpeta)):

    if($txt != "." && $txt != ".."):

        unlink("../menu-semanal/$menu/$txt");

    endif;

endwhile;

closedir($carpeta);

rmdir("../menu-semanal/$menu");

header("Location:index.php?seccion=home&exito=dia_borrado&diaid=$menu");