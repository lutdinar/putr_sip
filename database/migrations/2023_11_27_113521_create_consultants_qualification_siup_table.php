<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsQualificationSiupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_qualification_siup', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->date('expire_date');
            $table->string('document', 200);
            $table->bigInteger('verification_account')->nullable();
            $table->dateTime('verification_date')->nullable();
            $table->integer('verification_respons')->nullable();
            $table->text('verification_message')->nullable();
            $table->bigInteger('consultants');
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
        Schema::dropIfExists('consultants_qualification_siup');
    }
}
