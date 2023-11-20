<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsPersonilCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_personil_certificate', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name', 250);
            $table->string('document', 200)->nullable();
            $table->string('type', 100);
            $table->bigInteger('verification_account')->nullable();
            $table->dateTime('verification_date')->nullable();
            $table->integer('verification_respons')->nullable();
            $table->text('verification_message')->nullable();
            $table->bigInteger('consultants_personil');
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
        Schema::dropIfExists('consultants_personil_certificate');
    }
}
