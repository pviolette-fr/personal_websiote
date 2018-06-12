<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/{project}', function ($project) {

    $projectModel = App\Project::where('name', $project)->first();
    if ($projectModel == null) {
        return null;
    }
    return view('project', [
        'project' => $projectModel
    ]);
});
