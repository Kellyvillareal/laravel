<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario')->unique();
            $table->string('password', 60);
            $table->string('tipo');
            $table->rememberToken();
            $table->timestamps();
        });



        DB::table('users')->insert(array(
            array(
                'usuario' => 'admin',
                'password'  =>  bcrypt('admin'),
                'tipo' => 'admin'

 
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
        Schema::drop('users');
    }
}
