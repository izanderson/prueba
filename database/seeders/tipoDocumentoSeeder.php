<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos  = array([
            'nombre'=> 'Cedula'],
            ['nombre'=>'Tarjeta identidad'],
            );

      $total = count($datos);
      for($i=0;$i<$total;$i++){
        DB::table('tipos_documentos')->insert($datos[$i]);
    }
    }
}
