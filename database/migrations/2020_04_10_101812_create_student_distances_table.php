<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_distances', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('distance_id');

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('distance_id')->references('id')->on('distances')->onDelete('cascade');

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
        Schema::dropIfExists('student_distances');
    }
}
