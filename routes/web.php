<?php

use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

//Week 08
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/students', function () {
//     return view('students');
// });

// Route::get('/contact', function () {
//     return view('contact', [
//         'name' => 'Emma',
//         'email' => 'emma@yahoo.com'
//     ]);
// });

Route::get('/', function(){
    return view('index', [
        'pageTitle' => 'HOME PAGE'
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'pageTitle' => 'ABOUT PAGE'
    ]);
});

Route::get('/contact', function(){
    return view('contact', [
        'pageTitle' => 'CONTACT PAGE'
    ]);
});

//---------------PINDAHKAN KE CONTROLLER

// Route::get('/project', function () {
//     return view('project', [
//         'pageTitle' => 'PROJECT PAGE',
//         'projects' => Project::allData()
//     ]);
// });

// Route::get('/project/{code}', function ($code) {
//     return view('showproject', [
//         'pageTitle' => 'PROJECT',
//         'project' => Project::dataWithCode($code)
//     ]);
// });

// Route::get('/project/{id}', function ($id) {
//     $project = Project::find($id);
//     return view('showproject', [
//         'pageTitle' => 'PROJECT',
//         'project' => $project
//     ]);
// });

//---------------PINDAHKAN KE CONTROLLER

Route::get('/project', [ProjectController::class, 'getAllProjects']);
Route::get('/project/{code}', [ProjectController::class, 'getProjectByCode']) -> where('code', '[a-zA-Z]+');
Route::get('/project/{id}', [ProjectController::class, 'getProjectById']) -> where('id', '[0-9]+');