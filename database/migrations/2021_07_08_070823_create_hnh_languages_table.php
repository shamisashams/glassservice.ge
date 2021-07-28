<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHnhLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hnh_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hnh_id')->constrained('hnh');
            $table->foreignId('language_id')->constrained('languages');
            $table->index(['hnh_id', 'language_id']);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hnh_languages');
    }
}
