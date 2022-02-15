<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call(users::class);
        $this->call(departamentoSeeder::class);
        $this->call(municiopioSeeder::class);
        $this->call(generoSeeder::class);
        $this->call(tipoDocumentoSeeder::class);
        $this->call(pacientes::class);
    }
}
