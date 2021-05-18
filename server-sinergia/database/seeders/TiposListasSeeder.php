<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\TiposListas;
Use Log;
class TiposListasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Log::info("Ejecuto seeder de tipos de listas");
      $tiposListas = [
        [
          "nombre" => "tipo_identificacion",
          "tipo_lista_id" => "TI"
        ],
        [
          "nombre" => "tipo_tercero",
          "tipo_lista_id" => "TT"
        ],
        [
          "nombre" => "departamento",
          "tipo_lista_id" => "DEP"
        ],
        [
          "nombre" => "ciudad",
          "tipo_lista_id" => "CI"
        ],
        [
          "nombre" => "tipo_contribuyente",
          "tipo_lista_id" => "TC"
        ],
      ];

      TiposListas::insert($tiposListas);
    }
}
