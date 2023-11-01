<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestCourseInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_course_information', function (Blueprint $table) {
            $table->id();
            $table->string("grades");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("phone");
            $table->string("email");
            $table->string("state");
            $table->string("post_code");
            $table->text("comment")->nullable();
            $table->boolean("check")->default(false);
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
        Schema::dropIfExists('request_course_information');
    }
}
