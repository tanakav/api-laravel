<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Endereco::class,20)->create();
        factory(\App\Cidade::class,20)->create();
        factory(\App\Estado::class,20)->create();
        factory(\App\Usuario::class,20)->create();
    }
}
