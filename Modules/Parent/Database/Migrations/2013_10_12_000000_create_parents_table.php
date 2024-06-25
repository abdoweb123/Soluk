<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentTable extends Migration
{
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->bigInteger('city_id')->nullable();
            $table->string('image')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('parent_device_tokens', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->on('parents')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->longText('device_token')->nullable();

            $table->timestamps();
        });

        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
        Schema::dropIfExists('client_device_tokens');
        Schema::dropIfExists('parents');
    }
}
