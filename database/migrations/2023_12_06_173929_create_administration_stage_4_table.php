<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationStage4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_stage_4', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->bigInteger('tasks');
            $table->text('contract_document')->nullable();
            $table->text('contract_addendum_document')->nullable();
            $table->text('payment_guarantee')->nullable();
            $table->text('payment_request_1')->nullable();
            $table->text('payment_request_2')->nullable();
            $table->text('payment_request_3')->nullable();
            $table->text('payment_order')->nullable();
            $table->text('covering_letter')->nullable();
            $table->text('statement_letter')->nullable();
            $table->text('accountability_letter')->nullable();
            $table->text('minutes_of_payment')->nullable();
            $table->text('minutes_of_handover_payment')->nullable();
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
        Schema::dropIfExists('administration_stage_4');
    }
}
