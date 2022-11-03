<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminregisters', function (Blueprint $table) {
            $table->id();
            $table->String('username');
            $table->String('fullname');
            $table->String('email');
            $table->String('address');
            $table->String('contact');
            $table->String('password');
            $table->String('confirmpass');
            $table->String('filename');
            $table->String('role');
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
        Schema::dropIfExists('adminregisters');
    }
}
