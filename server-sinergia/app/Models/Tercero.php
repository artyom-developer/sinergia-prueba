<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    use HasFactory;

    protected $table = "terceros";

    protected $fillable = [
      'tipo_identificacion_id',
      'numero_identificacion',
      'tipo_tercero_id',
      'nombre1',
      'nombre2',
      'apellido1',
      'apellido2',
      'departamento_id',
      'idmunicipio_id',
      'tipo_contribuyente_id'
    ];

    public function departamento(){
      return $this->belongsTo("App\Models\ElementosListas","departamento_id","elemento_lista_id");
    }

    public function municipio(){
      return $this->belongsTo("App\Models\ElementosListas","idmunicipio_id","elemento_lista_id");
    }

    public function tipo_documento(){
      return $this->belongsTo("App\Models\ElementosListas","tipo_identificacion_id","elemento_lista_id");
    }

    public function tipo_tercero(){
      return $this->belongsTo("App\Models\ElementosListas","tipo_tercero_id","elemento_lista_id");
    }

}
