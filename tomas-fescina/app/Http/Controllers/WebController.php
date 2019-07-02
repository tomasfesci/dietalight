<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("web.index");
    }

    public function contacto(){
    return view("web.contacto");

    }
    public function opciones(){
        return view("web.opciones");

    }
    public function menu(Menu $menu){
        /*
         Cuando me traigo todo un modelo, tengo una forma de pedirle que me traiga tambien sus relaciones (si las voy a usar, es lo más optimo)

        Con el método ->with("relaciones") del modelo ->get()
         */
        $menues = $menu->get();

        //dd($tipoHabitaciones);
//        $tipoHabitaciones = [];

        // devolvemos la vista con los tipoHabitaciones
        return view("web.menusemanal"); //,compact('')
    }
}
