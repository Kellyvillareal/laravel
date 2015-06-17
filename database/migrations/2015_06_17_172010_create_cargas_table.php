<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargas', function(Blueprint $table)
		{
			$table->engine='InnoDB';
			$table->increments('id');
			$table->integer('codigoasig')->unsigned();
			$table->foreign('codigoasig')->references('id')->on('asignaturas')->onDelete('cascade')->onUpdate('cascade');
			$table->string('idprofesor');
			$table->foreign('idprofesor')->references('identificacion')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('cargas');
	}

}
