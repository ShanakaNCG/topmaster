<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeacherDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherdetail', function (Blueprint $table) {
            $table->string('teacher_id');
            $table->string('full_name');
            $table->integer('mobile_number');
            $table->integer('tel_number')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('profile_name');
            $table->string('profile_pic');
            $table->tinyInteger('account_type')->default('0');
            $table->string('start_date');
            $table->string('end_date');
            $table->tinyInteger('delete_raw')->default('0');
            $table->text('aboutme')->nullable();
            $table->text('experience')->nullable();
            $table->primary('teacher_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacherdetail');
    }
}