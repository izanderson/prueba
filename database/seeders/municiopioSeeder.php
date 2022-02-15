<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class municiopioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipios  = array(['departamento_id'=>'1',
        'nombre_municipio'=> 'Alvarado'],
        ['departamento_id'=>'1',
        'nombre_municipio'=> 'Libano'],
        ['departamento_id'=>'2',
        'nombre_municipio'=> 'Girardot'],
        ['departamento_id'=>'2',
        'nombre_municipio'=> 'Soacha'],
        ['departamento_id'=>'3',
        'nombre_municipio'=> 'Tulua'],
        ['departamento_id'=>'3',
        'nombre_municipio'=> 'Obando'],
        ['departamento_id'=>'4',
        'nombre_municipio'=> 'Popayan'],
        ['departamento_id'=>'4',
        'nombre_municipio'=> 'Caloto'],
        ['departamento_id'=>'5',
        'nombre_municipio'=> 'La plata'],
        ['departamento_id'=>'5',
        'nombre_municipio'=> 'Tello']);    
         $total2 = count($municipios);

   for($i=0;$i<$total2;$i++){
        DB::table('municipios')->insert($municipios[$i]);
    }
    }
}
