<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 70)->comment('full name');
            $table->string('mobile', 11)->unique()->comment('11 digit');
            $table->boolean('block')->default(false);
            $table->boolean('active')->default(false);
            $table->string('passcode', 5)->nullable();
            $table->dateTime('expire_passcode')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
