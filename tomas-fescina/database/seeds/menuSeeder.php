<?php

use Illuminate\Database\Seeder;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("menu")->insert([
            [
                "id" => 1,
                "almuerzo" => "Pizza de carne",
                "acompalm" => "Ensalada multicolor",
                "cena" => "Zapallitos rellenos",
                "acompcena" => "Ensalada de zanahoria y huevo",
                "nrodia" => "03/06",
                "nomdia" => "Lunes",
            ],
            [
                "id" => 2,
                "almuerzo" => "Milanesas de soja y espinaca o de carne",
                "acompalm" => "PPuré de calabaza",
                "cena" => "Tarta de berenjenas",
                "acompcena" => "Brócoli gratinado",
                "nrodia" => "04/06",
                "nomdia" => "Martes",

            ],
            [
                "id" => 3,
                "almuerzo" => "Pollo al verdeo",
                "acompalm" => "Tortilla de acelga",
                "cena" => "Omellete de arvejas",
                "acompcena" => "Panaché de vegetales",
                "nrodia" => "05/06",
                "nomdia" => "Miercoles",
        ],
            [
                "id" => 4,
                "almuerzo" => "Hamburguesas de cerdo o de carne al tomate",
                "acompalm" => "Ensalada verde",
                "cena" => "Arroz con vegetales al wok",
                "acompcena" => "Panaché de vegetales",
                "nrodia" => "06/06",
                "nomdia" => "Jueves",
            ],
            [
                "id" => 5,
                "almuerzo" => "Arrolladitos de merluza o de pollo con salsa de vegetales",
                "acompalm" => "Papas al natural",
                "cena" => "Pizzeta individual de harina integral capresses",
                "acompcena" => "Panaché de vegetales",
                "nrodia" => "07/06",
                "nomdia" => "Viernes",
            ],
            [
                "id" => 6,
                "almuerzo" => "Lasagna con salsa bolognesa",
                "acompalm" => "Papas al natural",
                "cena" => "Omellete de arvejas",
                "acompcena" => "Panaché de vegetales",
                "nrodia" => "08/06",
                "nomdia" => "Sabado",
            ],

        ]); //
    }
}
