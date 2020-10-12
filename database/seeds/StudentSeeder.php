<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Students\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    $students = [
        [ 
            'name' => 'Raghav', 
            'address' => 'khali kua', 
            'graduation' => 'bcom',
            'phonenumber'=>'8129045329'
        ],

        [
            'name' => 'Madhur', 
            'address' => 'Macchodri',  
            'graduation' => 'Bca',
            'phonenumber'=>'8192032348'
        ],
    ];

    foreach ($students as $stud) { 
        // dump($stud);
        // echo 123;
        $exists = DB::table('students')->where('name','=',$stud['name'])->exists();
        // dump($stud)
        
        if(!$exists){
            DB::table('students')->insert($stud);
        }
        
    }       
        
    }
}
