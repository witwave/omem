<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meetups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',150);
			$table->string('cover',200)->nullable();
			$table->string('summary',500)->nullable();
			$table->text('content');
			$table->date('endtime');//报名结束时间
			$table->integer('pv')->default(0);
			$table->integer('uv')->default(0);
			$table->integer('join_count')->default(0);
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
		Schema::drop('meetups');
	}

}
