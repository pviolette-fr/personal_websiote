<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public $readmeContent = null;

    /**
     * Define the One-to-Many (inverse) Category/Project relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo("App\Category");
    }

    public function gitRepositories()
    {
        return $this->belongsToMany('App\GitRepository', 'git_repositories_projects', 'project_id', 'git_repository_id')
            ->withPivot(['is_main_repository']);
    }

    public function linkedProjects()
    {
        return $this->belongsToMany('App\Project', 'project_linked_projects', 'project_id', 'linked_project_id');
    }

    public function loadReadme(): bool
    {
        return false;
    }

    public function readmeContent(): string
    {
        return null;
    }

    /*
     * Accessor
     */
    public function getLinkedPublishedProjectAttribute()
    {
        return $this->linkedProjects()->where('published', true);
    }
}
