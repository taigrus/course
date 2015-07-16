<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegranteFamiliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrante_familia', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('familia_id')->index()->unsigned();
            $table->integer('integrante_id')->index()->unsigned();
            $table->unique(array('familia_id', 'integrante_id'));
            $table->string('nombre',40);
            $table->string('paterno',40);
            $table->string('materno',40);
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->timestamps();
            $table->foreign('familia_id')->references('id')->on('familia_programa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrante_familia');
    }
}
