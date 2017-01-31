<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class General extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general', function (Blueprint $table) {
            $table->string('general_id');
            $table->string('general_type')->nullable();
            $table->string('general_title')->nullable();
            $table->string('general_content')->nullable();
            $table->string('general_url')->nullable();
            $table->tinyInteger('delete_raw')->default('0');
            $table->string('general_image')->nullable();
            $table->primary('general_id');
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
        Schema::dropIfExists('general');
    }
}
