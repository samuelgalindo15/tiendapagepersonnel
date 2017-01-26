<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
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
            'nombre'=>'Disco Duro',
            'precio'=>1444.10,
          ],
          1=>[
            'nombre'=>'Monitor',
            'precio'=>1999.10,
          ],
          2=>[
            'nombre'=>'Teclados',
            'precio'=>410.10,
          ],
          3=>[
            'nombre'=>'AMD-Computadora',
            'precio'=>4999,
          ],
          4=>[
            'nombre'=>'Laptop',
            'precio'=>14140.60,
          ],
        ];
    }
}
