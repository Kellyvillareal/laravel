<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notas', function(Blueprint $table)
		{
			$table->engine='InnoDB';
			$table->increments('id');
			$table->integer('idasigv')->unsigned();
			$table->foreign('idasigv')->references('id')->on('asigvistas')->onDelete('cascade')->onUpdate('cascade');
			$table->float('nota1');
			$table->float('nota2');
			$table->float('nota3');
			$table->float('nota4');
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
		Schema::drop('notas');
	}

}
