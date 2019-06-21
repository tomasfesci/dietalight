<?php
/**
 * Created by PhpStorm.
 * User: Depto
 * Date: 21/04/2019
 * Time: 20:37
 */

namespace Clases;


class Opciones
{
    protected $nombre;
    protected $descripcion;
    protected $ruta;
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * @param mixed $ruta
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public static function getOpciones(){
        $opcion=Filesystem::getAll("opciones");
        $opciones=[];
        foreach($opcion as $op):
            $opc= new Opciones("$op");
            $descrip= imprimir_detalle("opciones/$op/descripcion.txt","descripcion");
            $imagen = count(glob("opciones/$op/$op.*")) > 0 ? glob("opciones/$op/$op.*")[0] : "img/sin_imagen.jpg";
            $opc->setNombre($op);
            $opc->setDescripcion($descrip);
            $opc->setRuta($imagen);
            $opciones[]=$opc;

        endforeach;
        return $opciones;
    }
    public static function getOpcionesAfuera(){
        $opcion=Filesystem::getAll("../opciones");
        $opciones=[];
        foreach($opcion as $op):
            $opc= new Opciones("$op");
            $descrip= imprimir_detalle("../opciones/$op/descripcion.txt","descripcion");
            $imagen = count(glob("../opciones/$op/$op.*")) > 0 ? glob("../opciones/$op/$op.*")[0] : "../img/sin_imagen.jpg";
            $opc->setNombre($op);
            $opc->setDescripcion($descrip);
            $opc->setRuta($imagen);
            $opciones[]=$opc;

        endforeach;
        return $opciones;
    }
}

