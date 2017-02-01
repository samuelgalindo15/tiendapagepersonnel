<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados=[0=>['estado'=>'México', 'abreviatura'=>'mx'], 1=>['estado'=>'Jalisco', 'abreviatura'=>'jal'], 2=>['estado'=>'Oaxaca', 'abreviatura'=>'oax']];
        foreach ($estados as $key => $val) {
          DB::table('estados')->insert([
            'nombre' => $val['estado'],
            'abreviatura'=>$val['abreviatura']
          ]);
        }//foreach
    }
}
