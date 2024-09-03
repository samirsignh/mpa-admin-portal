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
        Schema::table('tbl_authentication', function (Blueprint $table) {
            $table->integer('otp')->nullable();
            $table->integer('otp_expiry')->nullable();
            $table->enum('is_otp_verified', ['1', '0'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_authentication', function (Blueprint $table) {
            //
        });
    }
};