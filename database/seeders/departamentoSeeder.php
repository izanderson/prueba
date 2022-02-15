<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos  = array([
            'nombre_departamento'=> 'Tolima'],
            ['nombre_departamento'=> 'Cundinamarca'],
            ['nombre_departamento'=> 'Valle'],
            ['nombre_departamento'=> 'Cauca'],
            ['nombre_departamento'=> 'Huila'],);

      $total = count($datos);

      for($i=0;$i<$total;$i++){
           DB::table('departamentos')->insert($datos[$i]);
       }
    }
}
