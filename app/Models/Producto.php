<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model{
  protected $table = 'productos';

  public function sucursales(){
    return $this->belongsToMany('App\Models\Sucursal');
  }
}
