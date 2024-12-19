<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class Project extends Model
{
    use HasFactory;

    private static $projects = [
        [
            'id' => '1',
            'title' => 'Calculator',
            'code' => 'cal',
            'course' => 'Algorithm Programming'
        ], 
        [
            'id' => '2',
            'title' => 'Accounting',
            'code' => 'acc',
            'course' => 'Web Programming'
        ],
        [
            'id' => '3',
            'title' => 'Student Report',
            'code' => 'stu',
            'course' => 'Web Programming'
        ],
    ];

    protected $fillable = ['title', 'code', 'course', 'client_id'];

    public function client(): BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public static function allData(){
        return Project::all();
        //return self::  =>  mengembalikan dirinya sendiri
    }

    public static function dataWithCode($code){
        $allProjects = Project::all();
        foreach ($allProjects as $project){
            if($project['code'] === $code){
                return $project;
            }
        }
    }

    public static function find($id) {
        $allProjects = Project::all();
        foreach ($allProjects as $project){
            if((string) $project['id'] === (string) $id){
                logger("project with $id found");
                return $project;
            }
            logger("project with $id not found");
        }
    }

    // public static function find($id): array{
    //     $allProjects = self::$projects;
    //     $project = Arr::first($allProjects, function ($project) use ($id){
    //         return $project['id'] == $id;
    //     });

    //     if (!$project) {
    //         abort(404);
    //     }else{
    //         return $project;
    //     }
    // }
}
