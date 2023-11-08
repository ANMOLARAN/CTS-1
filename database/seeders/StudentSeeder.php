<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members=collect([
            [
            'name'=>'cts',
            'email'=>'cts@gamil.com'
            ],
            [
            'name'=>'cloud',
            'email'=>'cloud@gmail.com'
            ],
            [
            'name'=>'service',
            'email'=>'service@gamil.com'
            ],

        ]);

        $members->each(function($member){
            student::insert($member);
        });
        //
        // student::create([
        //     'name'=>'cts',
        //     'email'=>'cts@gamil.com'
        // ]);
    }
}
