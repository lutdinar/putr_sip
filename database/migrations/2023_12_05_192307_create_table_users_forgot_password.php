<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsersForgotPassword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_forgot_password', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->bigInteger('users');
            $table->bigInteger('verify_users')->nullable();
            $table->dateTime('verify_date')->nullable();
            $table->integer('state')->comment('0 : waiting, 1 : done');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_users_forgot_password');
    }
}
