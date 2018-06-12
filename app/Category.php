<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';

    /**
     * Define the One-to-Many Category/Project relationship.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id')
            ->withDefault([
                'name' => 'Root',
                'description' => 'Root category',
                'published' => true
            ]);
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    /**
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function allPublished()
    {
        return self::all()->where('published', true);
    }
}
