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
        Schema::create('tbl_notice_and_circular_translation_details', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('circular_translation_id');
        $table->unsignedBigInteger('language_id');
        $table->string('leter_no');
        $table->string('notice_title');
        $table->string('document')->nullable();
        $table->text('description')->nullable();
        $table->date('notice_date');
        $table->boolean('status')->default(1);
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
        Schema::dropIfExists('tbl_notice_and_circular_translation_details');
    }
};
