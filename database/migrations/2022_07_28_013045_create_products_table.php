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
            $table->string('cover')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('color')->nullable();
            $table->float('price')->default('0.00');
            $table->string('description')->nullable();

            $table->integer('stock')->default(0);
            $table->string('category')->nullable();
            $table->integer('volumes')->default(1);
            $table->string('provider')->nullable();
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
