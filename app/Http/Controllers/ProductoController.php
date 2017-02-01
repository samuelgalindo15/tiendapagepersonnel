<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\SucursalesProducto;

class ProductoController extends Controller{

  public function index($sucursal=null){
    $estados= collect(Estado::get()->toArray());
    if(is_null($sucursal)){
      $productos= Estado::with('productos')->where('abreviatura', 'mx')->paginate(2);
    }else{
      $productos= Estado::with('productos')->where('abreviatura', $sucursal)->paginate(2);
    }//else
    return view('welcome', ['estados'=>$estados]);
  }

  public function buscar(){
    dd('Hola');
  }
}
