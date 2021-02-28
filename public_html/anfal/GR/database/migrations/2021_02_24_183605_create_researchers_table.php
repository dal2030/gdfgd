<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('e_name');
            $table->string('email');
            $table->biginteger('phone');
            $table->string('country');
            $table->string('city');
            $table->string('academic_name');
            $table->string('major');
            $table->string('speciality');
            $table->string('institution');
            $table->string('job_title');
            $table->date('birthday');
            $table->string('column_13');
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
        Schema::dropIfExists('researchers');
    }
}
