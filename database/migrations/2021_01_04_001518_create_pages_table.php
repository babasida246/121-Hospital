<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('catalogue_id');
            $table->string('title');
            $table->string('slug');    
            $table->timestamps();
            $table->foreign('catalogue_id')->references('id')->on('catalogues')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('slug')->references('id')->on('navigations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
