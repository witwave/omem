<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLogsTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url',500);
			$table->string('useragent',500);
			$table->string('ref',500);
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
		Schema::drop('logs');
	}
}