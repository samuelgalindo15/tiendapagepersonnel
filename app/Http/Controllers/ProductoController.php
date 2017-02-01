<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Sucursal;
use App\Models\SucursalesProducto;

class ProductoController extends Controller{

  public function index($sucursal=null){
    $estados= collect(Estado::get()->toArray());

    if(is_null($sucursal)){
      $estado= Estado::where('abreviatura', 'mx')->first()->id;
      $productos= Sucursal::with('productos')->where('estado_id', $estado)->get();
    }else{
      $estado= Estado::where('abreviatura', $sucursal)->first()->id;
      $productos= Sucursal::with('productos')->where('estado_id', $estado)->get();
    }//else
    return view('welcome', ['estados'=>$estados, 'productos'=>$productos]);
  }

  public function buscar(){
    dd('Hola');
  }
}
