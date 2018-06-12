<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGitRepositoriesProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('git_repositories_projects', function (Blueprint $table) {
            $table->integer('project_id');
            $table->integer('git_repository_id');
            $table->boolean('is_main_repository')->default(false);

            $table->primary(['project_id', 'git_repository_id']);

            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade');
            $table->foreign('git_repository_id')
                ->references('id')
                ->on('git_repositories');

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
        Schema::dropIfExists('git_repositories_projects');
    }
}
