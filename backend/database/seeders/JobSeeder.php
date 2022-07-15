<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jobs = [
            [
                'name'  => 'Frontend Web Programmer',
                'created_at' => new \DateTime
            ],
            [
                'name'  =>
                'Backend Web Programmer',
                'created_at' => new \DateTime
            ],
            [
                'name'  =>
                'Quality Control',
                'created_at' => new \DateTime
            ]
        ];

        DB::table('jobs')->insert($jobs);
    }
}
