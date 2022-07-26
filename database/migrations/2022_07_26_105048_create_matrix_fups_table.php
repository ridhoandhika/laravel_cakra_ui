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
        Schema::create('matrix_fups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->integer('usage_amount_1')->nullable();
            $table->enum('usage_unit_1',['K','M','G'])->nullable();
            $table->integer('speed_amount_1')->nullable();
            $table->enum('speed_unit_1',['K','M','G'])->nullable();
            $table->integer('usage_amount_2')->nullable();
            $table->enum('usage_unit_2',['K','M','G'])->nullable();
            $table->integer('speed_amount_2')->nullable();
            $table->enum('speed_unit_2',['K','M','G'])->nullable();
            $table->integer('usage_amount_3')->nullable();
            $table->enum('usage_unit_3',['K','M','G'])->nullable();
            $table->integer('speed_amount_3')->nullable();
            $table->enum('speed_unit_3',['K','M','G'])->nullable();
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matrix_fups');
    }
};
