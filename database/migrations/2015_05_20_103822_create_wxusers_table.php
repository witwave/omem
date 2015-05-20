<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateWxusersTable extends Migration {
	/**
	* Run the migrations.
	* @return void
	*/
	public function up()
	{
		Schema::create('wxusers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pid')->default(0);
			$table->string('openid')->unique();
			$table->string('wechat')->unique();
			$table->string('avatar',250)->nullable();
			$table->string('name',10);
			$table->string('nickname',50)->nullable();
			$table->integer('sex')->unsigned()->default(3);
			$table->string('mobile',13);
			$table->string('company',120);
			$table->string('title',120);
			$table->string('job',120);
			$table->string('email',120)->nullable();
		
			$table->string('sign',500)->nullable();
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
		Schema::drop('wxusers');
	}
}