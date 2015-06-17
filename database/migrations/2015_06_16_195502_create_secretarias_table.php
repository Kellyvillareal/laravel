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
			$table->string('identificacion')->unique();
			$table->string('nombre');
			$table->string('apellido');
			$table->string('sexo');
			$table->string('direccion');
			$table->string('telefono');
			$table->date('fechanac');
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








