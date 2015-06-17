<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos', function(Blueprint $table)
		{
			$table->engine='InnoDB';
			$table->string('identificacion');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('sexo');
			$table->string('direccion');
			$table->string('telefono');
			$table->date('fechanac');
			$table->string('estado');
			$table->date('fechavin');
			$table->date('fechadesv');
			$table->timestamps();
			$table->primary('identificacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos');
	}

}
