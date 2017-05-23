<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocpdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hocpds', function(Blueprint $table)
		{
			$table->increments('hocpdNumber');
			$table->integer('studentNumber');
			$table->integer('enrollNumber');
			$table->string('subject');
			$table->date('startTime');
			$table->date('endTime');
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
		Schema::drop('hocpds');
	}

}
