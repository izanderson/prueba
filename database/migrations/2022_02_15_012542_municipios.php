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
      
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();

            
            $table->text('nombre_municipio');
            $table->unsignedBigInteger("departamento_id");
            $table->timestamps();
            $table->foreign("departamento_id")->references("id")->on("departamentos")
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
        Schema::dropIfExists('municipios');
    }
};
