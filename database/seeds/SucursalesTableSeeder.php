<?php

use Illuminate\Database\Seeder;

class SucursalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sucursales=[
        0=>[
          'nombre'=>'computec-centro',
          'estado_id'=>1,
          'matriz'=>true
        ],
        1=>[
          'nombre'=>'computec',
          'estado_id'=>1,
          'matriz'=>false
        ],
        2=>[
          'nombre'=>'computec',
          'estado_id'=>2,
          'matriz'=>false
        ],
        3=>[
          'nombre'=>'computec ejutla',
          'estado_id'=>3,
          'matriz'=>false
        ],
        3=>[
          'nombre'=>'computec centro',
          'estado_id'=>3,
          'matriz'=>false
        ],
      ];
    }
}
