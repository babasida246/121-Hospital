<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_group_roles', function (Blueprint $table) {
            $table->uuid('user_group_id')->primary();
            $table->uuid('user_role_id');
            $table->timestamps();
            $table->foreign('user_group_id')->references('id')->on('user_groups')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_role_id')->references('id')->on('user_roles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_group_roles');
    }
}
