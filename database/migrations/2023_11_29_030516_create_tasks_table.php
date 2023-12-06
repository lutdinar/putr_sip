<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('category', 100);
            $table->string('type', 30);
            $table->string('contract_number', 100);
            $table->string('contract_value', 100);
            $table->integer('contract_duration');
            $table->string('budget_source', 50);
            $table->date('contract_start');
            $table->bigInteger('consultants');
            $table->bigInteger('infrastructures');
            $table->year('years');
            $table->string('status', 100)->nullable()->comment('1. null | 2. Sedang Dikerjakan | 3. Selesai');
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
        Schema::dropIfExists('tasks');
    }
}
