<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutrasAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outras_atividades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');

            $table->integer('vaga_id');
            $table->foreign('vaga_id')->references('id')->on('vagas')->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('outras_atividades');
    }
}
