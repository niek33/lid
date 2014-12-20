<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyeventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('myevents', function($table)
			{
				$table->increments('id');
			    $table->string('title', 30);
			    $table->text('description', 20);
			    $table->string('image', 100);
			    $table->date('date');
			    $table->timestamps();
		});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('myevents');	
	}

}
