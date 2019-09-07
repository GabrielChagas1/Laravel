<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titulo');
            $table->string('Descricao');
            $table->string('Imagem');
            $table->decimal('Valor', 5, 2);
            $table->enum('Publicado', ['Sim', 'Nao'])->default('Nao');
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
        Schema::dropIfExists('Cursos');
    }
}
