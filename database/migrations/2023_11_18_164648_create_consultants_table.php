<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('refer', 65)->unique();
            $table->string('name', 200);
            $table->string('email', 100)->unique();
            $table->string('phone', 20);
            $table->text('address');
            $table->string('logo', 100)->nullable();
            $table->bigInteger('account')->nullable();
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
        Schema::dropIfExists('consultants');
    }
}
