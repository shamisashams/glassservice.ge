<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_languages', function (Blueprint $table) {
            $table->longText('meta_title')->change();
            $table->longText('meta_description')->change();
            $table->longText('meta_keywords')->change();
            $table->longText('title')->change();
            $table->longText('description')->change();
            $table->longText('content')->change();
        });
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
