<?php
		  $fecha = date ("H:i");
          $msj = "";
          if ($fecha < 12) $msj=("Buenos dias! ");
          else if ($fecha < 19) $msj=("Buenas tardes! ");
          else $msj=("Buenas noches! ");

    function imprimir_detalle($ruta,$tipo){
        return file_exists($ruta) ? limpiar_string(file_get_contents($ruta)) : "Sin $tipo";
    }
    function limpiar_string($str){
        return nl2br(htmlentities(trim($str)));
    }
    function borrarbr($str){
        $limpio = str_replace("<br />", " ", $str);
        return $limpio;
    }
    function titulo_limpio($str){

        $nombre = str_replace("-"," ",$str);

        $nombre = ucwords($nombre);

        return $nombre;

    }    
   // function ordenar_menu()
?>