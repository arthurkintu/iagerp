<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeaveapplicationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaveapplications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('ApplicationDate');
            $table->string('StartDate');
            $table->string('EndDate');
            $table->string('Telephone');
            $table->string('Delegated');
            $table->string('Remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leaveapplications');
    }
}
