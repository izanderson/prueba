<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class generoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $datos  = array([
            'nombre'=> 'Masculino'],
            ['nombre'=>'femenino'],
            );

      $total = count($datos);
      for($i=0;$i<$total;$i++){
        DB::table('generos')->insert($datos[$i]);
    }
    }
}
