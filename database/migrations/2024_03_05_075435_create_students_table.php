<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->date('date_admission')->nullable();
            $table->unsignedBigInteger('branch_id');
            $table->string('enrollment')->nullable();
            $table->unsignedBigInteger('course');
            $table->date('till_date')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->date('student_dob');
            $table->enum('gender', ['male', 'female', 'transgender'])->nullable();
            $table->string('profile_image');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('wphone')->nullable();
            $table->string('email')->nullable();
            $table->string('pqualification');
            $table->unsignedBigInteger('qualification')->nullable();
            $table->enum('student_status', ['running', 'complete', 'dropout'])->nullable();
            $table->string('created_by');
            $table->enum('status', ['deactive', 'active']);
            $table->enum('approve', ['no', 'yes']);
            $table->timestamps();
            
            // Foreign key constraints
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('course')->references('id')->on('courses');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('qualification')->references('id')->on('qualifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
