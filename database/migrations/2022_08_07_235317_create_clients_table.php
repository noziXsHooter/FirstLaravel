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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('address')->nullable();
            $table->string('reference')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('cpf')->nullable();
            $table->string('identity')->nullable();
            $table->string('email')->nullable();
            $table->integer('points')->nullable();
            $table->integer('distance')->nullable();
            $table->integer('age')->nullable();
            $table->float('total')->default('0.00');
            $table->integer('rating')->nullable();
            $table->string('cover')->nullable();
            $table->date('born_in')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
