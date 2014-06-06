<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('citas', function($table)
		{
			$table->create();
			$table->increments('id_cita');
			$table->date('fecha');
			$table->time('hora');
			$table->integer('id_usuario');
			$table->string('area');
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
