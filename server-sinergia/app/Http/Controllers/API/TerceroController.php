<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Tercero;
Use App\Models\ElementosListas;
Use Log;

class TerceroController extends Controller
{

    public function parameter(){

      try {
        $data['tipo_identificacion'] = ElementosListas::select("nombre","elemento_lista_id as code")
        ->where("tipo_lista_id","TI")->get();
        $data['tipo_tercero'] = ElementosListas::select("nombre","elemento_lista_id as code")
        ->where("tipo_lista_id","TT")->get();
        $data['departamento'] = ElementosListas::select("nombre","elemento_lista_id as code")
        ->where("tipo_lista_id","DEP")->get();
        $data['ciudad'] = ElementosListas::select("nombre","elemento_lista_id as code")
        ->where("tipo_lista_id","CI")->get();
        $data['tipo_contribuyente'] = ElementosListas::select("nombre","elemento_lista_id as code")
        ->where("tipo_lista_id","TC")->get();

        return $data;

      } catch (\Exception $e) {
        return response()->json($e, 500);
      }


    }
    //
    public function getAll(){
      try {
        $data = Tercero::with("departamento","municipio","tipo_tercero","tipo_documento")->get();
        return response()->json($data, 200);
      } catch (\Exception $e) {
        return response()->json($e, 500);
      }

    }

  public function create(Request $request){

    try {
      $data['tipo_identificacion_id'] = $request['tipo_identificacion_id'];
      $data['numero_identificacion'] = $request['numero_identificacion'];
      $data['tipo_tercero_id'] = $request['tipo_tercero_id'];
      $data['nombre1'] = $request['nombre1'];
      $data['nombre2'] = $request['nombre2'];
      $data['apellido1'] = $request['apellido1'];
      $data['apellido2'] = $request['apellido2'];
      $data['departamento_id'] = $request['departamento_id'];
      $data['idmunicipio_id'] = $request['idmunicipio_id'];
      $data['tipo_contribuyente_id'] = $request['tipo_contribuyente_id'];

      Tercero::create($data);

      return response()->json([
        'message' => "Successfully created",
        'success' => true
      ], 200);

    } catch (\Exception $e) {
      return response()->json($e, 500);
    }

  }

  public function delete($id){
    try {

      $res = Tercero::find($id)->delete();
      return response()->json([
        'message' => "Successfully deleted",
        'success' => true
      ], 200);

    } catch (\Exception $e) {
      return response()->json($e, 500);
    }

  }

  public function get($id){

    try {
      $data = Tercero::find($id);
      return response()->json($data, 200);
    } catch (\Exception $e) {
      return response()->json($e, 500);
    }

  }

  public function update(Request $request,$id){

    try {
      $data['tipo_identificacion_id'] = $request['tipo_identificacion_id'];
      $data['numero_identificacion'] = $request['numero_identificacion'];
      $data['tipo_tercero_id'] = $request['tipo_tercero_id'];
      $data['nombre1'] = $request['nombre1'];
      $data['nombre2'] = $request['nombre2'];
      $data['apellido1'] = $request['apellido1'];
      $data['apellido2'] = $request['apellido2'];
      $data['departamento_id'] = $request['departamento_id'];
      $data['idmunicipio_id'] = $request['idmunicipio_id'];
      $data['tipo_contribuyente_id'] = $request['tipo_contribuyente_id'];
      Tercero::find($id)->update($data);
      return response()->json([
        'message' => "Successfully updated",
        'success' => true
      ], 200);
    } catch (\Exception $e) {
      return response()->json($e, 500);
    }

  }
}
