<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matriculas', function(Blueprint $table)
		{
			$table->engine='InnoDB';
			$table->increments('id');
			$table->integer('idcurso')->unsigned();
			$table->foreign('idcurso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
			$table->string('idalumno');
			$table->foreign('idalumno')->references('identificacion')->on('alumnos')->onDelete('cascade')->onUpdate('cascade');
			$table->string('estado');
			$table->timestamps();
            
                  //->onUpdate('cascade')
                  //->onDelete('cascade')  

            /*$table->foreign('idalumno')
            ->references('identificacion')->on('alumnos')
            ->onUpdate('cascade')
            ->onDelete('cascade'); */
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matriculas');
	}

}