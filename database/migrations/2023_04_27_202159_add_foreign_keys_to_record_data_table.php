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
        Schema::table('record_data', function (Blueprint $table) {
            $table->foreign('file_import_id')->references('id')->on('file_imports')->onDelete('cascade');
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
        Schema::table('record_data', function (Blueprint $table) {
            $table->dropForeign(['file_import_id']);
            $table->dropForeign(['record_type_id']);
        });
    }
};
