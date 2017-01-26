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
        $estados=['Ciudad de México', 'Jalisco', 'Oaxaca'];
        foreach ($estados as $key => $val) {
          DB::table('estados')->insert([
            'nombre' => $val,
          ]);
        }//foreach
    }
}
