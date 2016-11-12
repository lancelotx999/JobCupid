<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->binary('pic');
            $table->string('desc');
            $table->string('status');
            $table->timestamps();
        });

        DB::table('employers')->insert(
        array(
            'name' => "ET",
            'email' => "ET@jobcupid.my",
            'password' => "ET",
            'pic' => 10,
            'desc' => "Founder of JobCupid",
            'status' => "Premium",
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
