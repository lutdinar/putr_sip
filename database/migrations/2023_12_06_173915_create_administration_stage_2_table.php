<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationStage2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_stage_2', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->bigInteger('tasks');
            $table->bigInteger('deed_of_company');
            $table->bigInteger('deed_of_company_change')->nullable();
            $table->bigInteger('id_card_directure')->nullable();
            $table->bigInteger('tax_document_director')->nullable();
            $table->bigInteger('tax_document_company')->nullable();
            $table->text('domicili')->nullable();
            $table->bigInteger('id_card_owner')->nullable();
            $table->bigInteger('tax_document_owner')->nullable();
            $table->bigInteger('qualification_sbu')->nullable();
            $table->bigInteger('qualification_iujk')->nullable();
            $table->bigInteger('qualification_siup')->nullable();
            $table->bigInteger('qualification_nib')->nullable();
            $table->bigInteger('qualification_tax_annual')->nullable();
            $table->bigInteger('qualification_experience')->nullable();
            $table->bigInteger('qualification_information_bank')->nullable();
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
        Schema::dropIfExists('administration_stage_2');
    }
}
