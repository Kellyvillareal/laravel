<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos', function(Blueprint $table)
		{
			$table->engine='InnoDB';

			$table->increments('id');
			$table->integer('grado');
			$table->integer('grupo');
			$table->timestamps();
			

		});

				DB::table('cursos')->insert(array(
            array(
                'id' => '1',
                'grado' => '1',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '2',
                'grado' => '1',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '3',
                'grado' => '1',
                'grupo'  =>	'3'
 
            )
            ));

		DB::table('cursos')->insert(array(
            array(
                'id' => '4',
                'grado' => '2',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '5',
                'grado' => '2',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '6',
                'grado' => '2',
                'grupo'  =>	'3'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '7',
                'grado' => '3',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '8',
                'grado' => '3',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '9',
                'grado' => '3',
                'grupo'  =>	'3'
 
            )
            ));	

		DB::table('cursos')->insert(array(
            array(
                'id' => '10',
                'grado' => '4',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '11',
                'grado' => '4',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '12',
                'grado' => '4',
                'grupo'  =>	'3'
 
            )
            ));


	DB::table('cursos')->insert(array(
            array(
                'id' => '13',
                'grado' => '5',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '14',
                'grado' => '5',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '15',
                'grado' => '5',
                'grupo'  =>	'3'
 
            )
            ));

		DB::table('cursos')->insert(array(
            array(
                'id' => '16',
                'grado' => '6',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '17',
                'grado' => '6',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '18',
                'grado' => '6',
                'grupo'  =>	'3'
 
            )
            ));
		DB::table('cursos')->insert(array(
            array(
                'id' => '19',
                'grado' => '7',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '20',
                'grado' => '7',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '21',
                'grado' => '7',
                'grupo'  =>	'3'
 
            )
            ));
		DB::table('cursos')->insert(array(
            array(
                'id' => '22',
                'grado' => '8',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '23',
                'grado' => '8',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '24',
                'grado' => '8',
                'grupo'  =>	'3'
 
            )
            ));
		DB::table('cursos')->insert(array(
            array(
                'id' => '25',
                'grado' => '9',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '26',
                'grado' => '9',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '27',
                'grado' => '9',
                'grupo'  =>	'3'
 
            )
            ));
		DB::table('cursos')->insert(array(
            array(
                'id' => '28',
                'grado' => '10',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '29',
                'grado' => '10',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '30',
                'grado' => '10',
                'grupo'  =>	'3'
 
            )
            ));
		DB::table('cursos')->insert(array(
            array(
                'id' => '31',
                'grado' => '11',
                'grupo'  =>	'1'
 
            )
        ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '32',
                'grado' => '11',
                'grupo'  =>	'2'
 
            )
            ));
	DB::table('cursos')->insert(array(
            array(
                'id' => '33',
                'grado' => '11',
                'grupo'  =>	'3'
 
            )
            ));

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursos');
	}

}