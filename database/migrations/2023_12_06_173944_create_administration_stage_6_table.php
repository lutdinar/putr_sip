<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationStage6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_stage_6', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->bigInteger('tasks');
            $table->text('report_mc')->nullable();
            $table->text('report_backup')->nullable();
            $table->text('request_handover_letter')->nullable();
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
        Schema::dropIfExists('administration_stage_6');
    }
}
