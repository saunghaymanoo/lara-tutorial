<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('year')->truncate();
        DB::table('year')->insert([
            'id'            => '1',
            'year'          => '2007',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('year')->insert([
            'id'            => '2',
            'year'          => '2008',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('year')->insert([
            'id'            => '3',
            'year'          => '2009',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('year')->insert([
            'id'            => '4',
            'year'          => '2010',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('year')->insert([
            'id'            => '5',
            'year'          => '2011',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('year')->insert([
            'id'            => '6',
            'year'          => '2012',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
    }
}
