<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('author');
            $table->string('publisher_id')->references('id')->on('publishers');
            $table->string('category_id')->references('id')->on('categories');
            $table->string('synopsis');
            $table->string('year');


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
        Schema::dropIfExists('Books');
    }
};
