<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Menu $menu)
    {
        $menues = $menu->paginate(6);

        return view("panel.menu.index")->with("menues",$menues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Menu $menu)
    {
        $menues = $menu->all()->pluck("nombre","id");

        return view("panel.menu.form",compact("dias"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validaciones = [
            "dianro" => "required|string",
            "nomdia" => "required",
            "almuerzo" => "required",
            "id" => "required|exists:id",
            "cena" => "required"
        ];

        $mensajes = [
            "id.required" => "El campo ID es requerido",
            "id.exists" => "El campo ID seleccionado no existe"
        ];

        $validacion = Validator::make($request->all(),$validaciones,$mensajes);

        if($validacion->fails())
            return redirect()->back()->withErrors($validacion);

        $request->imagen->storeAs("menues",$request->nomdia.".".$request->imagen->extension());

        $data = $request->except("imagen");

        $data["imagen"] = "storage/menues/".$request->nomdia.".".$request->imagen->extension();

        //dd($data);
        $menu = Menu::create($data);

        if($menu)
            return redirect()->route("menu.index");



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Menu $menu)
    {
        $menues = $menu->find($id);

        if(!$menu)
            return redirect()->back()->withErrors("El MENU que se quiere editar no existe");

        $menus = $menu->all()->pluck('nomdia','id');

        return view("panel.menu.form",compact("dia","menu"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);

        if(!$menu)
            return redirect()->back()->withErrors("El menu a editar no existe");


        $validaciones = [
            "dianro" => "required|string",
            "nomdia" => "required",
            "almuerzo" => "required",
            "id" => "required|exists:id",
            "cena" => "required"
        ];

        $validar = $request->validate($validaciones);

        $request->imagen->storeAs("menues",$request->nomdia.".".$request->imagen->extension());

        $data = $request->except("imagen");

        $data["imagen"] = "storage/menues/".$request->nomdia.".".$request->imagen->extension();


        if(!$menu->update($data)):
            return redirect()->back()->withErrors("No se pudo editar el dia");

        endif;

        return redirect()->route("menu.index")->with("ok","El dia se editó correctamente");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);

        if(!$menu)
            return redirect()->back()->withErrors("No se puede eliminar el dia");

        if($menu->delete())
            return redirect()->route("menu.index")->with("ok","Se borró el menu seleccionada");


    }
}
