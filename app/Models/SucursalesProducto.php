<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SucursalesProducto extends Model{
  protected $table = 'sucursales_productos';

  public function sucursal(){
    return $this->belongsTo('App\Models\Sucursal', 'sucursal_id', 'id');
  }
}
