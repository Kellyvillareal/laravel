<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesors', function(Blueprint $table)
		{
			
			$table->string('nombre');
			$table->string('apellido');
			$table->float('identificacion');
			$table->string('sexo');
			$table->string('telefono');
			$table->string('direccion');
			$table->date('fechanacimiento');
		$table->string('estado');
			$table->string('titulo');

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
		Schema::drop('profesors');
	}

}
