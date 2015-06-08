<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretariasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secretarias', function(Blueprint $table)
		{
			
			$table->string('nombre');
			$table->string('apellido');
			$table->float('identificacion');
			$table->string('sexo');
			$table->string('telefono');
			$table->string('direccion');
			$table->date('fechanacimiento');
			$table->string('estado');
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
		Schema::drop('secretarias');
	}

}