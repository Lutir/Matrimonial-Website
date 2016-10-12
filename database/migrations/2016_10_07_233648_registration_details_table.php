<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistrationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('username')->default('');            
            $table->string('password');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('sex');
            $table->string('age');
            $table->string('religion');
            $table->string('country');
            $table->string('mothertongue');            
            $table->string('description');
            $table->string('marital_status');            
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
        //
        Schema::drop('user_info');
    }
}
