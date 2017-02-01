<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadosTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(SucursalesTableSeeder::class);
        $this->call(SucursalesProductosTableSeeder::class);

    }
}
