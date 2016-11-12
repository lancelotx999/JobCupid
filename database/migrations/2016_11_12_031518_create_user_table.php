<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->binary('pic');
            $table->string('skills');
            $table->string('desc');
            $table->string('status');
            $table->timestamps();
        });

        DB::table('users')->insert(
        array(
            'name' => "Sean Lee",
            'email' => "sean@jobcupid.my",
            'password' => "potato",
            'pic' => 10,
            'skills' => "IT",
            'desc' => "Developer",
            'status' => "Premium",
        ));
        DB::table('users')->insert(
        array(
            'name' => "Kenneth Yeo",
            'email' => "kenneth@jobcupid.my",
            'password' => "kenneth",
            'pic' => 10,
            'skills' => "IT",
            'desc' => "Developer",
            'status' => "Premium",
        ));
        DB::table('users')->insert(
        array(
            'name' => "Nicholas",
            'email' => "nicholas@jobcupid.my",
            'password' => "potato",
            'pic' => 10,
            'skills' => "Designer",
            'desc' => "Designer",
            'status' => "Premium",
        ));
        DB::table('users')->insert(
        array(
            'name' => "Aleph",
            'email' => "aleph@jobcupid.my",
            'password' => "aleph",
            'pic' => 10,
            'skills' => "Business",
            'desc' => "CEO",
            'status' => "Premium",
        ));
        DB::table('users')->insert(
        array(
            'name' => "JK",
            'email' => "JK@jobcupid.my",
            'password' => "JK",
            'pic' => 10,
            'skills' => "IT",
            'desc' => "Developer",
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
        Schema::dropIfExists('users');
    }
}
