<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_owner', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name', 250);
            $table->string('email', 150)->unique();
            $table->string('phone', 20);
            $table->string('photo', 200)->nullable();
            $table->string('id_card', 200)->nullable();
            $table->bigInteger('id_card_verification_account')->nullable();
            $table->dateTime('id_card_verification_date')->nullable();
            $table->integer('id_card_verification_respons');
            $table->text('id_card_verification_message')->nullable();
            $table->string('tax_id_number', 40)->nullable();
            $table->string('tax_id_document', 200)->nullable();
            $table->bigInteger('tax_id_verification_account')->nullable();
            $table->dateTime('tax_id_verification_date')->nullable();
            $table->integer('tax_id_verification_respons')->nullable();
            $table->text('tax_id_verification_message')->nullable();
            $table->char('is_director', 1);
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
        Schema::dropIfExists('consultants_owner');
    }
}
