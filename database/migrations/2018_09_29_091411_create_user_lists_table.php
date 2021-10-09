<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->enum('status',['Active','Inactive','Pending'])->default('Active');
            $table->string('otp')->nullable();
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
        Schema::dropIfExists('user_lists');
    }
}
