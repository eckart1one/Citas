<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::table('users', function($table)
		{
			$table->create();
			$table->increments('id_usuario');
			$table->string('name');
			$table->string('email')->unique();			
			$table->integer('phone');
			$table->boolean('level');
			$table->string('password');
			$table->string('remember_token');
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
		Schema::drop('users');
	}

}
