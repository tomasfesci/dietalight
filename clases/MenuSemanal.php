<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 12/4/2019
 * Time: 16:41
 */

namespace Clases;


class MenuSemanal
{
    protected $id;
    protected $dianro;
    protected $nomdia;
    protected $almuerzo;
    protected $acompalm;
    protected $cena;
    protected $acompcena;


    protected $atributos = [];


    public function __construct($id)
    {
        //$this->dianro = $dianro;
        $this->id = $id;
        //$this->almuerzo = $almuerzo;
        //$this->cena = $cena;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getDianro()
    {
        return $this->dianro;
    }

    public function setDianro($dianro)
    {
        $this->dianro = $dianro;
    }

    public function getAlmuerzo()
    {
        return $this->almuerzo;
    }

    public function getNomdia()
    {
        return $this->nomdia;
    }

    public function setNomdia($nomdia)
    {
        $this->nomdia = $nomdia;
    }

    public function getAcompalm()
    {
        return $this->acompalm;
    }
    public function setAcompalm($acompalm)
    {
        $this->acompalm = $acompalm;
    }
    public function getAcompcena()
    {
        return $this->acompcena;
    }
    public function setAcompcena($acompcena)
    {
        $this->acompcena = $acompcena;
    }
    public function setAlmuerzo($almuerzo)
    {
        $this->almuerzo = $almuerzo;
    }

    public function getCena()
    {
        return $this->cena;
    }

    public function setCena($cena)
    {
        $this->cena = $cena;
    }

    public function __get($propiedad)
    {
        $this->checkPropiedad($propiedad);
    }

    public function checkPropiedad($prop){
        if(method_exists($this,"get". ucfirst($prop))){
            $getter = "get".ucfirst($prop);

            return $this->$getter();
        }else if(property_exists($this,$prop)){

            return $this->$prop;

        }else{
            if(array_key_exists($prop,$this->atributos)){
                return $this->atributos[$prop];
            }else{
                throw new Exception("La propiedad <b>$prop</b> no existe");
            }
        }

    }

    public function __set($propiedad, $valor)
    {
        if(method_exists($this,"set". ucfirst($propiedad))){
            $setter = "set".ucfirst($propiedad);

            $this->$setter($valor);

        }else{
            $this->atributos[$propiedad] = $valor;
        }


    }
    public static function getAll(){
        $query = "SELECT * FROM dietalight";

        $db = DB::getConnection();

        $stmt = $db->prepare($query);

        $stmt->execute();

        $menusemanal = [];

        while($menuid = $stmt->fetchObject()):

            $menusemanal[] = self::setAttributes($menuid);

        endwhile;

        return $menusemanal;
    }

    private static function setAttributes($atributos){
        /*$menu = new MenuSemanal($atributos->id);
        $menu->setId($atributos->id);

        return $menu;*/
        //$num = MenuSemanal::menuPorId($atributos->id);

        $menu = new MenuSemanal($atributos->id);
       // $menu->setDianro($atributos->dianro);
        $menu->setAlmuerzo($atributos->almuerzo);
        $menu->setCena($atributos->cena);
        $menu->setDianro($atributos->nrodia);
        $menu->setNomdia($atributos->nomdia);
        $menu->setAcompalm($atributos->acompalm);
        $menu->setAcompcena($atributos->acompcena);
        return $menu;
    }

    /**
     *
     */
    public static function editarMenu(){
        $query = "UPDATE dietalight SET almuerzo = getAlm();, 
        acompalm = $acompalm, getAcompalm();
        cena = $cena,
        acompcena = $acompcena,
        nomdia = $nomdia,
        nrodia = $nrodia
        WHERE id = $id";

        $db = DB::getConnection();

        $stmt = $db->prepare($query);

        $stmt->execute();

        $menusemanal = [];

        while($menuid = $stmt->fetchObject()):

            $menusemanal[] = self::setAttributes($menuid);

        endwhile;
     }


}