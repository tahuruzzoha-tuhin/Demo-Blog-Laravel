<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTestResultsTable extends Migration
{
    public function up()
    {
        Schema::table('test_results', function (Blueprint $table) {
            $table->unsignedInteger('test_id');
            $table->foreign('test_id', 'test_fk_2185745')->references('id')->on('tests');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id', 'student_fk_2185746')->references('id')->on('users');
        });
    }
}