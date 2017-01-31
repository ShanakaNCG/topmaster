<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->string('news_id');
            $table->string('news_type');
            $table->string('news_title')->nullable();
            $table->string('news_content')->nullable();
            $table->string('news_image')->nullable();
            $table->string('news_url')->nullable();
            $table->tinyInteger('top_news')->default('0');
            $table->tinyInteger('delete_raw')->default('0');
            $table->timestamps();
            $table->primary('news_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
