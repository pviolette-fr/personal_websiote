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

    public function loadReadme(): bool
    {
        return false;
    }

    public function readmeContent(): string
    {
        return null;
    }
}
