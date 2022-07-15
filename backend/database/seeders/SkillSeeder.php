<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ss = [
            [
                'name'  => 'PHP',
                'created_at' => new \DateTime
            ],
            [
                'name'  =>
                'JavaScript',
                'created_at' => new \DateTime
            ],
            [
                'name'  =>
                'MySQL',
                'created_at' => new \DateTime
            ]
        ];

        DB::table('skills')->insert($ss);
    }
}
