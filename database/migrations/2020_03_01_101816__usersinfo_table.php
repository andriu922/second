<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('UsersInfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('First name')->nullable();
            $table->string('Last name')->nullable();
            $table->string('Nickname')->nullable();
            $table->integer('Age')->nullable();
            $table->string('Avatar')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('UsersInfo');
    }
}
