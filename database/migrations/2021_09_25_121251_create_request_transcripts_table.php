<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTranscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_transcripts', function (Blueprint $table) {
            $table->id();
            $table->string("request_date");
            $table->string("birth_date");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("course");
            $table->string("address");
            $table->string("phone");
            $table->string("email");
            $table->string("send_transcript_to");
            $table->integer("requested_number");
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
        Schema::dropIfExists('request_transcripts');
    }
}
