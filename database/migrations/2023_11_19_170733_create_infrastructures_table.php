<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfrastructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infrastructures', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('code', 25);
            $table->string('name', 300);
            $table->string('type', 20);
            $table->string('village', 20)->nullable();
            $table->string('district', 20);
            $table->double('length');
            $table->double('width');
            $table->string('road',20)->nullable();
            $table->double('good_condition')->nullable();
            $table->double('medium_condition')->nullable();
            $table->double('slight_damage_condition')->nullable();
            $table->double('severely_damage_condition')->nullable();
            $table->integer('total_landscape')->nullable();
            $table->string('superstructure_type', 100)->nullable();
            $table->string('superstructure_condition', 100)->nullable();
            $table->string('substructure_type', 100)->nullable();
            $table->string('substructure_condition', 100)->nullable();
            $table->string('fondation_type', 100)->nullable();
            $table->string('fondation_condition', 100)->nullable();
            $table->string('floor_type', 100)->nullable();
            $table->string('floor_condition', 100)->nullable();
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
        Schema::dropIfExists('infrastructures');
    }
}
