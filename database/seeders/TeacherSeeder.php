<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Facades\File;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get(path:'database/json/teachers.json');
        // $teachers= json_decode($json);//Array
         $teachers = collect(json_decode($json));
        

        $teachers->each(function($teacher){
            
        Teacher::create([
                    'name'=>$teacher->name,
                    
                    'email'=>$teacher->email

                ]);
        });

        
        // Teacher::insert($teachers);
    }
}
