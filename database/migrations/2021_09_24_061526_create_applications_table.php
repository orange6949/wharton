<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("student_first_name");
            $table->string("student_last_name");
            $table->string("student_birthdate");
            $table->string("student_sex");
            $table->string("student_country")->nullable();
            $table->string("student_street")->nullable();
            $table->string("student_city")->nullable();
            $table->string("student_state")->nullable();
            $table->string("student_postal_code")->nullable();
            $table->string("student_grade");
            $table->string("relationship_to_student");
            $table->string("guardian_first_name");
            $table->string("guardian_last_name");
            $table->string("guardian_email");
            $table->string("guardian_phone");
            $table->string("session");
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
        Schema::dropIfExists('applications');
    }
}
