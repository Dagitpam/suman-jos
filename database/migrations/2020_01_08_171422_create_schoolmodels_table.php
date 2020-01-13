<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolmodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('schoolname');
            $table->string('schoolid');
            $table->string('schooladdress');
            $table->string('periodfrom');
            $table->string('periodto');
            $table->string('email');
            $table->string('contactnumber');
            $table->string('category');
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
        Schema::dropIfExists('schoolmodels');
    }
}
