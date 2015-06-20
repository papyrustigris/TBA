<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('signups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('address_line_1');
			$table->string('address_line_2')->nullable();
			$table->string('state');
			$table->integer('zip_code');
			$table->string('email');
			$table->string('gender');
			$table->integer('age');
			$table->boolean('disabled');
			$table->string('disabled_name')->nullable();
			$table->string('how_you_heard_about_us');
			$table->rememberToken();
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
		Schema::drop('signups');
	}

}
