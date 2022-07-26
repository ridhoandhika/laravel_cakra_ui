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
        Schema::create('matrix_non_quotas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->decimal('speed')->nullable();
            $table->enum('unit',['K','M','G'])->nullable();
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
        Schema::dropIfExists('matrix_non_quotas');
    }
};
