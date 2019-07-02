<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu_semanal";

    protected $primaryKey = "id";

    // Si la tabla de este modelo tiene o no los campos created_at y updated_at
    public $timestamps = true;

    protected $fillable = ["almuerzo","acompalm","cena","acompcena","nrodia","nomdia"];

    // Qué campos quiero evitar insertar
    // protected $guarded = ["id"];
}
