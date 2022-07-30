<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('english')->nullable();
            $table->string('mathematics')->nullable();
            $table->string('biology')->nullable();
            $table->string('chemistry')->nullable();
            $table->string('physics')->nullable();
            $table->string('irk')->nullable();
            $table->string('crk')->nullable();
            $table->string('agric')->nullable();
            $table->string('lit')->nullable();
            $table->string('economics')->nullable();
            $table->string('commerce')->nullable();
            $table->string('government')->nullable();
            $table->string('geography')->nullable();
            $table->string('accountring')->nullable();
            $table->string('yoruba')->nullable();
            $table->string('computer')->nullable();
            $table->string('civic')->nullable();

            // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');


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
        Schema::dropIfExists('student_reports');
    }
}