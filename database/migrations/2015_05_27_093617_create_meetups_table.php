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
		Schema::create('meetups', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('summary', 256);
            $table->text('content');
            $table->dateTime('end_time');
            $table->integer('pv')->default(0);
            $table->integer('uv')->default(0);
            $table->integer('max_count')->default(0);
            $table->integer('join_count')->default(0);
            $table->boolean('online')->default(false);
            $table->decimal('price')->default(0);
            $table->string('mark', 500)->nullable();
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
