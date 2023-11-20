<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsPersonilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_personil', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name', 250);
            $table->string('photo', 250)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('id_card', 200)->nullable();
            $table->integer('id_card_verification_account')->nullable();
            $table->dateTime('id_card_verification_date')->nullable();
            $table->integer('id_card_verification_respons')->nullable();
            $table->text('id_card_verification_message')->nullable();
            $table->string('position', 200);
            $table->string('education_level', 50);
            $table->string('education_document', 200)->nullable();
            $table->bigInteger('education_verification_account')->nullable();
            $table->dateTime('education_verification_date')->nullable();
            $table->integer('education_verification_respons')->nullable();
            $table->text('education_verification_message')->nullable();
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
        Schema::dropIfExists('consultants_personil');
    }
}
