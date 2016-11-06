<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('description', 256);
            $table->string('role_list', 2048);
            $table->string('route_list', 2048);
            $table->tinyInteger('is_admin');
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
        Schema::drop('role_group');
    }
}
