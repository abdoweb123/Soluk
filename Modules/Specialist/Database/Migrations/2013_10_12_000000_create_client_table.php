<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistTable extends Migration
{
    public function up()
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('specialists');
    }
}
