<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id')->unsigned();
            $table->integer('college_id')->unsigned();
            $table->integer('stage_id')->unsigned();

            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->default('avater.png');
            $table->string('gender');
            $table->string('address')->nullable();
            $table->string('work')->nullable();
            $table->string('github')->nullable();
            
            // 
            $table->tinyInteger('active')->default(0);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();            
            $table->timestamps();

            $table->foreign('college_id')->references('id')->on('colleges')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('stage_id')->references('id')->on('stages')->onDelete('cascade');
        });
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
