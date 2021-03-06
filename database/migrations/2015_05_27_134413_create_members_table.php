<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->default(0);
            $table->integer('group_id')->index();
            $table->string('openid', 64)->default('');
            $table->string('wechat', 120)->default('');
            $table->string('qq', 16)->default('');
            $table->string('avatar', 200)->default('');
            $table->string('name', 16)->nullable()->index();
            $table->string('nickname', '20')->default('')->index();
            $table->integer('sex')->default(3);
            $table->string('email', 100)->default('');
            $table->string('company_name', 128)->default(0)->index();
            $table->string('company_site', 128)->nullable();
            $table->string('position', 100)->default('');
            $table->string('industry', 100)->default('');
            $table->date('born_date')->nullable();
            $table->string('born_location', 100)->default('');
            $table->string('live_city', 20)->default('');
            $table->string('address', 256)->default('');
            $table->string('sign', 1000)->default('');
            $table->string('mark', 500)->default('');
            $table->string('phone', 12)->default('');
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
        Schema::drop('members');
    }

}
