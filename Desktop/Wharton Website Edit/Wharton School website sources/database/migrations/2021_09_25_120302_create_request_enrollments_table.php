<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string("grade");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("phone");
            $table->string("email");
            $table->string("country");
            $table->string("address");
            $table->text("comment")->nullable();
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
        Schema::dropIfExists('request_enrollments');
    }
}
