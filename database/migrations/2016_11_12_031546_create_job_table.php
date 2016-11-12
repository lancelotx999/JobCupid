<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('desc');
            $table->string('requirements');
            $table->string('status');
            $table->double('employer_id');
            $table->double('user_id');
            $table->timestamps();
        });

        DB::table('jobs')->insert(
        array(
            'title' => "JobCupid (Developers Wanted)",
            'desc' => "ET@jobcupid.my Looking for developers to fill in a developer position in my company",
            'requirements' => "IT Background for developer position",
            'status' => "Unfilled",
            'employer_id' => "IT",
            'user_id' => 1,
            'employer_id' => 1,
        ));

        DB::table('jobs')->insert(
        array(
            'title' => "JobCupid (Designers Wanted)",
            'desc' => "ET@jobcupid.my Looking for Designers to fill in a designer position in my company",
            'requirements' => "Design background for design position",
            'status' => "Unfilled",
            'employer_id' => "IT",
            'user_id' => 2,
            'employer_id' => 1,
        ));

        DB::table('jobs')->insert(
        array(
            'title' => "JobCupid (Promoters Wanted)",
            'desc' => "ET@jobcupid.my Looking for Promoters to fill in a promoting position in my company",
            'requirements' => "Experience in promoting",
            'status' => "Unfilled",
            'employer_id' => "IT",
            'user_id' => 3,
            'employer_id' => 1,
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
