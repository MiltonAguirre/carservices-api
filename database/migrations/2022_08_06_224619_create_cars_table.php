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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->string('brand');
            $table->string('model');
            $table->string('year');
            $table->string('color')->nullable();
            $table->string('patent');
            $table->string('fuel');
            $table->string('transmission')->nullable();
            $table->string('type');
            $table->string('doors')->nullable();
            $table->string('seats')->nullable();
            $table->timestamps();
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
