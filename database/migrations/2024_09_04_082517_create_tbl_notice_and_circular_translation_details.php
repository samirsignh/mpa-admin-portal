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
            $table->foreignId('notice_and_circular_translation_id');
            $table->integer('language_id');
            $table->string('notice_title')->nullable;
            $table->string('document')->nullable;
            $table->string('description')->nullable;
            $table->date('notice_date')->nullable;
            $table->string('leter_no')->nullable;
            $table->string('created_by')->nullable;
            $table->string('updated_by')->nullable;
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
