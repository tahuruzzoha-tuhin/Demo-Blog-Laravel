<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQuestionOptionsTable extends Migration
{
    public function up()
    {
        Schema::table('question_options', function (Blueprint $table) {
            $table->unsignedInteger('question_id')->nullable();
            $table->foreign('question_id', 'question_fk_2185738')->references('id')->on('questions');
        });
    }
}