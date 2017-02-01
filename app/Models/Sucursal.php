<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model{
  protected $table = 'sucursales';

  public function productos(){
    return $this->belongsToMany('App\Models\Producto', 'sucursales_productos', 'sucursal_id', 'producto_id')->withPivot('cantidad');
  }
}
