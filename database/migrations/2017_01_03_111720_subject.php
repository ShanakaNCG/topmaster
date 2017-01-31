<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->string('subjects_id');
            $table->string('subjet_name');
            $table->string('subject_title');
            $table->string('subject_contends');
            $table->tinyInteger('delete_raw');
            $table->timestamps();
            $table->primary('subjects_id');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
