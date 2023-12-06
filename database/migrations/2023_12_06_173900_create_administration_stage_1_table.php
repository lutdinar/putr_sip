<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationStage1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_stage_1', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->bigInteger('tasks');
            $table->string('type', 50)->comment('penawaran | ')->nullable();
            $table->string('name', 200)->nullable();
            $table->text('information')->nullable();
            $table->text('document')->nullable();
            $table->bigInteger('users')->nullable();
            $table->dateTime('uploaded')->nullable();
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
        Schema::dropIfExists('administration_stage_1');
    }
}
