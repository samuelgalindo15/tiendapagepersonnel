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
            'image'=>'disco-duro.jpg'
          ],
          1=>[
            'nombre'=>'Monitor',
            'precio'=>1999.10,
            'image'=>'monitores.jpg'
          ],
          2=>[
            'nombre'=>'Teclados',
            'precio'=>410.10,
            'image'=>'teclados.jpg'
          ],
          3=>[
            'nombre'=>'AMD-Computadora',
            'precio'=>4999,
            'image'=>'amd.jpg'
          ],
          4=>[
            'nombre'=>'Laptop',
            'precio'=>14140.60,
            'image'=>'laptop.jpg'
          ],
        ];
        foreach ($productos as $key => $val) {
          DB::table('productos')->insert([
            'nombre' => $val['nombre'],
            'precio'=>$val['precio'],
            'image'=>$val['image']
          ]);
        }//foreach
    }
}
