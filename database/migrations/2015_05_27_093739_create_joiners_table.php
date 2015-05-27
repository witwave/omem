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
		Schema::create('joiners', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('meetup_id')->index();
            $table->integer('member_id')->index();
            $table->string('name', 32);
            $table->string('mobile', 16);
            $table->string('meetup_name', 100);
            $table->boolean('signed')->default(false);
            $table->dateTime('signed_time')->nullable();
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
