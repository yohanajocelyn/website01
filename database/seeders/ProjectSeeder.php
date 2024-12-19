<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Untuk seeder, dicomment dulu untuk menjalankan Factory
        // Project::create([
        //     'title' => 'Calculator',
        //     'code' => 'cal',
        //     'course' => 'Algorithm Programming'
        // ]);

        //Untuk Factory
        // Project::factory()->count(10)->create(); //sblm relationship

        //sesudah relationship
        Project::factory()->count(200)
        ->recycle(Client::factory(30)->create()) //otomatis untuk clientnya diambil dari table client. client juga akan dibuatkan 3, 
        //di tabel projects akan dibuat 20 projects dan kolom client id akan random ambil dari 3 client yg dibuat td
        ->create();
    }
}
