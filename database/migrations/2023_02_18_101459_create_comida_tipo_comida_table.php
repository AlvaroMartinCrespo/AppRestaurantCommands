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
        Schema::create('comida_tipo_comida', function (Blueprint $table) {

            $table->unsignedBigInteger('id_comida');
            $table->unsignedBigInteger('id_tipo');

            $table->primary(['id_comida'], ['id_tipo']);

            $table->foreign('id_comida')
                ->references('id')
                ->on('comida')
                ->onDelete('cascade');

            $table->foreign('id_tipo')
                ->references('id')
                ->on('tipo_comida')
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
        Schema::dropIfExists('comida_tipo_comida');
    }
};
