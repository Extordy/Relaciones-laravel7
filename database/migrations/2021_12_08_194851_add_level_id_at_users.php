<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelIdAtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //agregar una columna a una tabla ya creada
        Schema::table('users',function(Blueprint $table){
            $table->bigInteger('level_id')->unsigned()
                    ->nullable()
                    ->after('id');

            //relacion con niveles
            $table->foreign('level_id')->references('id')->on('levels')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
