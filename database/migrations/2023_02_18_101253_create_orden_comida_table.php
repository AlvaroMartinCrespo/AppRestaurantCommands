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
        Schema::create('orden_comida', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('id_orden');
            $table->unsignedBigInteger('id_comida');

            $table->foreign('id_comida')
                ->references('id')
                ->on('comida')
                ->onDelete('cascade');
                
            $table->foreign('id_orden')
                ->references('id')
                ->on('orden')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_comida');
    }
};
