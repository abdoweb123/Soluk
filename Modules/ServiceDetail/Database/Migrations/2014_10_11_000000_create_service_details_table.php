<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('beneficiary_id');
            $table->unsignedBigInteger('center_id');
            $table->string('age_range');
            $table->integer('sessions_count');
            $table->integer('session_duration');
            $table->timestamps();

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_details');
    }
}
