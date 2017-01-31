<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeacherSubjet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_subjet', function (Blueprint $table) {
            $table->string('teacher_id');
            $table->increments('count');
            $table->json('subjectlist')->nullable();
            $table->tinyInteger('delete_raw')->default('0');
            $table->timestamps();
            $table->primary('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_subjet');
    }
}
