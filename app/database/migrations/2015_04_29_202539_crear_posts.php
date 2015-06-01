<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearPosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('posts', function($table){
			$table->increments('id');
			$table->integer('id_user')->unsigned();
			$table->text('content', 100);
			$table->text('filepath', 100);
			$table->timestamps();
		});

		Schema::table('posts', function($table) {
			$table->foreign('id_user')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('CASCADE');
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
		Schema::drop('posts');
	}

}
