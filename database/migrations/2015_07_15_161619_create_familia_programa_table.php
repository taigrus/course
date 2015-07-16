<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familia_programa', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('folio',15)->unique()->index();
            $table->string('direccion');
            $table->double('latitud');
            $table->double('longitud');
            $table->integer('altura')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('familia_programa');
    }
}
