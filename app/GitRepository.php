<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GitRepository extends Model
{

    public function projects()
    {
        return $this->belongsToMany('App\Project', 'git_repositories_projects', 'git_repository_id', 'project_id')
            ->withPivot(['is_main_repository']);
    }

}
