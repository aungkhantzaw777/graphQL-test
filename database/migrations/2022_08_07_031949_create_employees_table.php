<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Employees');
            $table->string('Location');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Department');
            $table->string('EmployeeCode');
            $table->string('CustomTags');
            $table->string('Positions');
            $table->string('NRC');
            $table->string('Manager');
            $table->string('ManagerPosition');
            $table->dateTime('JoinnedDate', $precision = 0);
            $table->dateTime('TerminateDate',$precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *"id": 1,
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
