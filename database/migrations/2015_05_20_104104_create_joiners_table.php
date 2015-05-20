<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('joiners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('wxuser_id');
			$table->integer('meetup_id');
			$table->string('name',10);
			$table->string('mobile',13);
			$table->string('meetup_name',150);
			$table->integer('signed')->default(0);//签到
			$table->date('signed_time');
			$table->softDeletes();
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
		Schema::drop('joiners');
	}

}
