<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('short_description', 255);
            $table->text('description');
            $table->string('git_link')->nullable(true);
            $table->string('readme_file')->nullable(true);
            $table->string('download_link')->nullable(true);
            $table->string('report_file')->nullable(true);
            $table->integer('category_id');
            $table->enum('status', ['finished', 'in developement', 'abandoned', 'waiting']);
            $table->text('status_explain');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('categories');
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
