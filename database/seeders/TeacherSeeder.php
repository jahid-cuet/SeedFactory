<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $teachers=collect([
            [
                'name'=>'hasan',
                'email'=>'hasan@gmail.com'  
        ],
        
        [
            'name'=>'salman',
            'email'=>'salman@gmail.com'  
    ],
        [
            'name'=>'tajul',
            'email'=>'tajul@gmail.com'  
    ],
        
    ]);

        $teachers->each(function($teachers){
            Teacher::insert($teachers);

        });

        // Teacher::create([
        //     'name'=>'hasan',
        //     'email'=>'hasan@gmail.com'

        // ]);
    }
}
