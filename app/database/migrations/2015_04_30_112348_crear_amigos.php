<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearAmigos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('friends', function($table){
			$table->integer('id')->unsigned();
			$table->integer('id_user')->unsigned();
			$table->tinyInteger('status');
			$table->timestamps();
		});

		Schema::table('friends', function($table) {
			$table->foreign('id_user')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');
			$table->foreign('id')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');

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
				Schema::drop('friends');

	}

}
