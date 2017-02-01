<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model{
  protected $table = 'estados';

  public function productos(){
    return $this->hasManyThrough(
      'App\Models\SucursalesProducto', 'App\Models\Sucursal',
      'estado_id', 'sucursal_id', 'id'
    );
  }
}
