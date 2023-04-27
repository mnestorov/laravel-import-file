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
        Schema::create('record_mappings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('record_type_id');
            $table->integer('start_range');
            $table->integer('end_range');
            $table->integer('length');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('record_type_id')->references('id')->on('record_types')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_mappings');
    }
};
