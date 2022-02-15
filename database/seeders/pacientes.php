<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pacientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pacientes  = array(['tipo_documento_id'=>'1',
            'numero_documento'=> '2119403927','nombre1'=>'carlos','nombre2'=>'','apellido1'=>'torres','apellido2'=>'lopez','genero_id'=>'1','departamento_id'=>'1','municipio_id'=>'1','user_id'=>'1'],['tipo_documento_id'=>'2',
            'numero_documento'=> '6437234','nombre1'=>'maria','nombre2'=>'jose','apellido1'=>'gonzalez','apellido2'=>'zuluaga','genero_id'=>'2','departamento_id'=>'2','municipio_id'=>'3','user_id'=>'1'],
            ['tipo_documento_id'=>'1',
            'numero_documento'=> '1219403927','nombre1'=>'jose','nombre2'=>'','apellido1'=>'lopez','apellido2'=>'gonzales','genero_id'=>'1','departamento_id'=>'3','municipio_id'=>'5','user_id'=>'1'],['tipo_documento_id'=>'2',
            'numero_documento'=> '419403927','nombre1'=>'andres','nombre2'=>'felipe','apellido1'=>'gomez','apellido2'=>'martinez','genero_id'=>'1','departamento_id'=>'3','municipio_id'=>'5','user_id'=>'1'],['tipo_documento_id'=>'1',
            'numero_documento'=> '519403927','nombre1'=>'carolina','nombre2'=>'','apellido1'=>'hincapie','apellido2'=>'torres','genero_id'=>'2','departamento_id'=>'4','municipio_id'=>'8','user_id'=>'1'],
           );    
             $total3 = count($pacientes);

       for($i=0;$i<$total3;$i++){
   		 DB::table('pacientes')->insert($pacientes[$i]);
		}
    }
}
