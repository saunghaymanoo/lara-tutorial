<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('major')->truncate();
        DB::table('major')->insert([
            'id'            => '1',
            'name'          => 'Bio',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('major')->insert([
            'id'            => '2',
            'name'          => 'Eco',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
    }
}
