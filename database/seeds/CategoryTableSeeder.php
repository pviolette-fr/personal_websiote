<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Category::class, 2)->create()
            ->each(function ($c) {
                $childPerCategory = 2;
                $projectPerCategory = 3;
                for ($i = 0; $i < $childPerCategory; ++$i) {
                    /**
                     * @var App\Category $child
                     */
                    $child = factory(App\Category::class)->make();
                    $c->children()->save($child);
                    $child->projects()->saveMany(factory(App\Project::class, $projectPerCategory)->make());
                }
            });
    }
}
