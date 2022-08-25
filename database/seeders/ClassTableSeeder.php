<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->truncate();
        DB::table('classes')->insert([
            'id'            => '1',
            'name'          => 'Grade-9',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('classes')->insert([
            'id'            => '2',
            'name'          => 'Grade-10',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
    }
}
