<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome');
            $table->string('Email',200)->unique();
            $table->string('Telefone',15);
            $table->string('Celular',15);
            $table->date('Dt_Nascimento');
            $table->string('CEP',9);
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('UF',2);
            $table->string('Endereco');
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
        Schema::dropIfExists('visitantes');
    }
}
