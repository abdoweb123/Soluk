<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderHomeTable extends Migration
{
    public function up()
    {
        Schema::create('SliderHome', function (Blueprint $table) {
            $table->id();

            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->string('file')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
