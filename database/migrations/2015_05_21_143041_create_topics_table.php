<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('topics', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100)->default('');
			$table->text('body');
			$table->string('cover', 100)->default('');
			$table->integer('uid')->default(0);
			$table->integer('pv')->default(0);
			$table->integer('uv');
			$table->integer('user_count')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('topics');
	}

}
