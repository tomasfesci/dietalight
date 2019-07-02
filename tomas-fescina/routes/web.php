<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/",[
    "as" => "web.index",
    "uses" => "WebController@index"
]);

Route::get("/contacto",[
    "as" => "web.contacto",
    "uses" => "WebController@contacto"
]);
Route::get("/opciones",[
    "as" => "web.opciones",
    "uses" => "WebController@opciones"
]);

Route::get("/menusemanal",[
    "as" => "web.menusemanal",
    "uses" => "WebController@menusemanal"
]);
Route::group(["prefix" => "panel"],function (){

    Route::get("/", [
        "as" => "panel.index",
        "uses" => "PanelController@index"
    ]);


    Route::group(["prefix" => "menu"],function (){

        Route::get("/",[
            "as" => "menu.index",
            "uses" => "MenuController@index"
        ]);


        Route::get("/create",[
            "as" => "menu.create",
            "uses" => "MenuController@create"
        ]);


        Route::post("/store",[
            "as" => "menu.store",
            "uses" => "MenuController@store"
        ]);


        Route::get("/{id}/edit",[
            "as" => "menu.edit",
            "uses" => "MenuController@edit"
        ]);


        Route::put("/{id}/update",[
            "as" => "menu.update",
            "uses" => "MenuController@update"
        ]);

        Route::delete("/{id}/destroy",[
            "as" => "menu.destroy",
            "uses" => "MenuController@destroy"
        ]);


    });

});