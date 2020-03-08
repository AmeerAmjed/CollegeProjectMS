<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('project_views', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('project_id');
        //     $table->string('ip_address');
        //     $table->string('session_id');
        //     $table->string('user_agent');
        //     $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_views');
    }
}
