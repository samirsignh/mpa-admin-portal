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
        Schema::create('tbl_authentication_translation', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->nullable();
            $table->integer('languageId')->nullable();
            $table->integer('translateId')->nullable();
            $table->string('name')->nullable();
            $table->string('emailId')->unique()->nullable();
            $table->bigInteger('mobileNo')->nullable();
            $table->string('password')->nullable();
            $table->integer('userType')->nullable();
            $table->integer('isActive')->default(1)->nullable();
            $table->string('createdBy')->nullable();
            $table->string('updatedBy')->nullable();
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
        Schema::dropIfExists('tbl_authentication_translation');
    }
};
