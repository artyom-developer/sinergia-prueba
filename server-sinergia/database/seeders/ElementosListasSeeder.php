<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\ElementosListas;
class ElementosListasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $elementosListas = [
          [
            'nombre' => "Cedula Ciudadania",
            'elemento_lista_id' => "CC",
            'tipo_lista_id' => "TI"
          ],
          [
            'nombre' => "Tarjeta Identidad",
            'elemento_lista_id' => "TID",
            'tipo_lista_id' => "TI"
          ],
          [
            'nombre' => "NIT",
            'elemento_lista_id' => "NIT",
            'tipo_lista_id' => "TI"
          ],
          [
            'nombre' => "Empleado",
            'elemento_lista_id' => "EM",
            'tipo_lista_id' => "TT"
          ],
          [
            'nombre' => "Contratista",
            'elemento_lista_id' => "CO",
            'tipo_lista_id' => "TT"
          ],
          [
            'nombre' => "Paciente",
            'elemento_lista_id' => "PA",
            'tipo_lista_id' => "TT"
          ],
          [
            'nombre' => "Huila",
            'elemento_lista_id' => "HUI",
            'tipo_lista_id' => "DEP"
          ],
          [
            'nombre' => "Tolima",
            'elemento_lista_id' => "TOL",
            'tipo_lista_id' => "DEP"
          ],
          [
            'nombre' => "Ibague",
            'elemento_lista_id' => "IBA",
            'tipo_lista_id' => "CI"
          ],
          [
            'nombre' => "Neiva",
            'elemento_lista_id' => "NEV",
            'tipo_lista_id' => "CI"
          ],
          [
            'nombre' => "Gran contribuyent",
            'elemento_lista_id' => "GC",
            'tipo_lista_id' => "TC"
          ],
          [
            'nombre' => "Responsable de iva",
            'elemento_lista_id' => "RI",
            'tipo_lista_id' => "TC"
          ],
          [
            'nombre' => "Régimen especial",
            'elemento_lista_id' => "RE",
            'tipo_lista_id' => "TC"
          ]
        ];

        ElementosListas::insert($elementosListas);
    }
}
