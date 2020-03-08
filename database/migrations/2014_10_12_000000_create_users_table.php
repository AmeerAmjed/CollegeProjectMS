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
            $table->BigInteger('role_id');
            $table->BigInteger('college_id');
            $table->BigInteger('stage_id');

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

            $table->foreign('users.college_id')->references('colleges.id')->on('colleges')->onDelete('cascade');
            $table->foreign('users.role_id')->references('roles.id')->on('roles')->onDelete('cascade');
            $table->foreign('users.stage_id')->references('stages.id')->on('stages')->onDelete('cascade');
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
