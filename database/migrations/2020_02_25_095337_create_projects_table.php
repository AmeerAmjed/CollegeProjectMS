<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('stage_id')->unsigned();
            $table->BigInteger('college_id')->unsigned();

            $table->string('name');
            $table->text('description');
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('language')->nullable();
            $table->tinyInteger('active')->default(0);
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
        Schema::dropIfExists('projects');
    }
}
