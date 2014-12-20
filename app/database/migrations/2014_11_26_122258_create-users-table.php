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
		Schema::create('users', function($table)
			{
				$table->increments('id');
			    $table->string('firstname', 20);
			    $table->string('lastname', 20);
			    $table->string('street', 100);
			    $table->string('zipcode', 7);
			    $table->string('city', 30);
			    $table->string('telephone', 20);
			    $table->string('birthday', 20);
			    $table->string('email', 100)->unique();
			    $table->string('password', 64);
			    $table->timestamps();
                $table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');	}

}
