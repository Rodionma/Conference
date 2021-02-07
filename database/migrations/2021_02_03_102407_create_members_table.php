<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{

    public function up()
    {


        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthdate');
            $table->string('country');
            $table->string('report_subject');
            $table->integer('telephone');
            $table->string('email');
            $table->string('company');
            $table->string('position');
            $table->text('about me');
            $table->text('photo');
        });
    }



    public function down()
    {
        Schema::dropIfExists('members');
    }
}
