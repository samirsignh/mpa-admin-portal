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
        Schema::create('tbl_notice_and_circulars', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('circular_translation_id');
        $table->unsignedBigInteger('created_by');
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->timestamps();

        $table->foreign('circular_translation_id')
              ->references('id')
              ->on('tbl_notice_and_circular_translation_details')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_notice_and_circulars');
    }
};
