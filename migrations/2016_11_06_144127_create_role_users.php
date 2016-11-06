<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->bigInteger('uid');
            $table->integer('gid');
            $table->tinyInteger('status');
            $table->bigInteger('operator_uid');
            $table->string('operator_name', 30);
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
        Schema::drop('role_users');
    }
}
