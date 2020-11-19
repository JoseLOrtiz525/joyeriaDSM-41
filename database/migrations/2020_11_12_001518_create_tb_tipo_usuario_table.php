<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->integer('matricula') -> nullable();
            $table->string('nombre',30) -> nullable();
            $table->string('app',30) -> nullable();
            $table->string('apm',30);
            $table->date('fn') -> nullable();
            $table->integer('gen') -> nullable();
            $table->string('tel',30);
            $table->string('email',50) -> nullable();
            $table->string('pass',30) -> nullable();
            $table->text('img')  -> nullable();
            $table->integer('id_grupo') -> nullable();
            $table->integer('id_tipo') -> nullable();
            $table->string('activo',30) -> nullable();
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
        Schema::dropIfExists('tb_usuario');
    }
}
