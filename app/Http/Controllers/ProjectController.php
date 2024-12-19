<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getAllProjects(){
        return view('project', [
            'pageTitle' => 'PROJECT',
            // 'projects' => Project::allData() masih pakai allData() yang disetup sendiri
            'projects' => Project::all() //pake function all() bawaan dari laravel
        ]);
    }

    public function getProjectByCode($code){
        return view('showproject', [
            'pageTitle' => 'PROJECT',
            'project' => Project::dataWithCode($code)
        ]);
    }

    public function getProjectById($id){
        $project = Project::find($id);
        if (!$project) {
            abort(404, "Project not found");
        }
        return view('showproject', [
            'pageTitle' => 'PROJECT',
            'project' => $project
        ]);
    }
}
