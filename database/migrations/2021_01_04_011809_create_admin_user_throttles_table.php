<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUserThrottlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_user_throttles', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->char('ip_address',12);
            $table->integer('attemps');
            $table->timestamp('last_attempt_at');
            $table->tinyInteger('is_suspended');
            $table->tinyInteger('suspended_at');
            $table->tinyInteger('is_banned');
            $table->timestamp('banned_at')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_user_throttles');
    }
}
