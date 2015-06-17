<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsigvistasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asigvistas', function(Blueprint $table)
		{
				$table->engine='InnoDB';
			$table->increments('id');
			$table->integer('codigoasig')->unsigned();
			$table->foreign('codigoasig')->references('id')->on('asignaturas')->onDelete('cascade')->onUpdate('cascade');
			$table->string('idalumno');
			$table->foreign('idalumno')->references('identificacion')->on('alumnos')->onDelete('cascade')->onUpdate('cascade');
			$table->string('estado');
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
		Schema::drop('asigvistas');
	}

}
