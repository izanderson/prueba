<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('tipo_documento_id');
             
            
            $table->integer('numero_documento');
            $table->text('nombre1');
            $table->text('nombre2');
            $table->text('apellido1');
            $table->text('apellido2');
           
             $table->unsignedBigInteger("genero_id");

       
            $table->unsignedBigInteger("departamento_id");
           
            
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            //llaves foraneas
            $table->foreign("user_id")->references("id")->on("users")
            ->onUpdate("cascade");
            $table->foreign("tipo_documento_id")->references("id")->on("tipos_documentos")
            ->onUpdate("cascade");
            $table->foreign("genero_id")->references("id")->on("generos")
            ->onUpdate("cascade");
            $table->foreign("departamento_id")->references("id")->on("departamentos")
            ->onUpdate("cascade");
            $table->foreign("municipio_id")->references("id")->on("municipios")
            ->onUpdate("cascade");
           
           
            

            
            
           
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
