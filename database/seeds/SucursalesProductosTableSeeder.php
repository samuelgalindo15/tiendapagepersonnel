<?php

use Illuminate\Database\Seeder;

class SucursalesProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $productos=[
        0=>[
          'cantidad'=>50,
          'sucursal_id'=>1,
          'producto_id'=>1,
        ],
        1=>[
          'cantidad'=>25,
          'sucursal_id'=>2,
          'producto_id'=>1,
        ],
        2=>[
          'cantidad'=>20,
          'sucursal_id'=>3,
          'producto_id'=>1,
        ],
        3=>[
          'cantidad'=>30,
          'sucursal_id'=>4,
          'producto_id'=>1,
        ],

        5=>[
          'cantidad'=>10,
          'sucursal_id'=>1,
          'producto_id'=>2,
        ],
        6=>[
          'cantidad'=>5,
          'sucursal_id'=>2,
          'producto_id'=>2,
        ],
        7=>[
          'cantidad'=>8,
          'sucursal_id'=>3,
          'producto_id'=>2,
        ],
        8=>[
          'cantidad'=>10,
          'sucursal_id'=>4,
          'producto_id'=>2,
        ],

        10=>[
          'cantidad'=>4,
          'sucursal_id'=>1,
          'producto_id'=>3,
        ],
        11=>[
          'cantidad'=>6,
          'sucursal_id'=>2,
          'producto_id'=>3,
        ],
        12=>[
          'cantidad'=>9,
          'sucursal_id'=>3,
          'producto_id'=>3,
        ],
        13=>[
          'cantidad'=>10,
          'sucursal_id'=>4,
          'producto_id'=>3,
        ],

        15=>[
          'cantidad'=>5,
          'sucursal_id'=>1,
          'producto_id'=>4,
        ],
        16=>[
          'cantidad'=>3,
          'sucursal_id'=>2,
          'producto_id'=>4,
        ],
        17=>[
          'cantidad'=>2,
          'sucursal_id'=>3,
          'producto_id'=>4,
        ],
        18=>[
          'cantidad'=>4,
          'sucursal_id'=>4,
          'producto_id'=>4,
        ],

        20=>[
          'cantidad'=>8,
          'sucursal_id'=>1,
          'producto_id'=>5,
        ],
        21=>[
          'cantidad'=>3,
          'sucursal_id'=>2,
          'producto_id'=>5,
        ],
        22=>[
          'cantidad'=>2,
          'sucursal_id'=>3,
          'producto_id'=>5,
        ],
        23=>[
          'cantidad'=>4,
          'sucursal_id'=>4,
          'producto_id'=>5,
        ],
      ];
      foreach ($productos as $key => $val) {
        DB::table('sucursales_productos')->insert([
          'cantidad' => $val['cantidad'],
          'sucursal_id'=>$val['sucursal_id'],
          'producto_id'=>$val['producto_id']
        ]);
      }//foreach
    }
}
