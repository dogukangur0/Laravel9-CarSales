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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('series')->nullable();
            $table->string('model')->nullable();
            $table->string('image')->nullable();
            $table->string('detail')->nullable();
            $table->string('price')->nullable();
            $table->integer('year')->nullable();
            $table->string('fuel')->nullable();
            $table->string('gear')->nullable();
            $table->integer('km')->nullable();
            $table->string('casetype')->nullable();
            $table->integer('motorpower')->nullable();
            $table->string('color')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('status', 6)->default('False');
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
        Schema::dropIfExists('products');
    }
};
