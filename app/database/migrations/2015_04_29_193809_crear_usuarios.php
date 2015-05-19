<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table){

			$table->increments('id_user');
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
			$table->string('username', 100);
			$table->string('email', 100)->unique();
			$table->string('name', 100);
			$table->string('password', 100);
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
