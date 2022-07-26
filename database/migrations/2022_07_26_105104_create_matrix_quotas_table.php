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
        Schema::create('matrix_quotas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->integer('quota')->nullable();
            $table->enum('unit',['K','M','G'])->nullable();
            $table->integer('speed_amount')->nullable();
            $table->enum('speed_unit',['K','M','G'])->nullable();
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
        Schema::dropIfExists('matrix_quotas');
    }
};
