<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHnhFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hnh_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feature_id')->constrained('features');
            $table->foreignId('hnh_id')->constrained('hnh');
            $table->index(['feature_id', 'hnh_id']);
            $table->json('answers');
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
        Schema::dropIfExists('hnh_features');
    }
}
