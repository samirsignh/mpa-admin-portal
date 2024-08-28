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
        Schema::create('tbl_user_master', function (Blueprint $table) {
            $table->string('id', 200)->primary();
            $table->string('user_unique_id', 200)->nullable();
            $table->string('user_name', 200)->nullable();
            $table->string('contact_no', 15)->nullable();
            $table->string('email_id', 200)->nullable();
            $table->integer('user_type')->nullable()->comment('1=>super admin,2=>MPA user,3=>Normal User');
            $table->string('user_password', 250)->nullable();
            $table->integer('login_status')->nullable()->comment('1=>login,0=>logout');
            $table->dateTime('login_date_time')->nullable();
            $table->dateTime('logout_date_time')->nullable();
            $table->string('c_by',200)->nullable();
            $table->string('d_by', 200)->nullable();
            $table->timestamps();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_master');
    }
};
