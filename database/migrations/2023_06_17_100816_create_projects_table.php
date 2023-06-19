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
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('thumbnail');
            $table->string('github_link');
            $table->string('youtube_link');
            $table->integer('category_id')->unsigned()->index();
            $table->string('skills');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');//table project that has category_id(foreign key)Join
           // with table categories thas has id(primary key)
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
