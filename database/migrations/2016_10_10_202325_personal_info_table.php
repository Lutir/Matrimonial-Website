<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personal_info', function (Blueprint $table) { 
            $table->integer('id')->unsigned();                        
            $table->string('drinks');
            $table->string('diet')->default('veg');
            $table->string('smoke');
            $table->string('raashi')->default('none');
            $table->integer('income')->default(0);
            $table->string('occupation');
            $table->string('company_name');
            $table->string('fathers_occupation');
            $table->string('mothers_occupation');
            $table->string('complexion')->default('fair');            
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
    }
}
