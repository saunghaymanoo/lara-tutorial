<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->truncate();
        DB::table('students')->insert([
            'name'          => 'ram',
            'city'          => 'Mumbai',
            'distance'      => '0.39',
            'moons'   		=> '0',
            'year_id'       => '1',
            'class_cd'      => '1',
            'major_cd'      => '1',
            'parent_id'     => '1',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Rajesh',
            'city'          => 'Pune',
            'distance'      => '0.41',
            'moons'   		=> '0',
            'year_id'       => '2',
            'class_cd'      => '1',
            'major_cd'      => '1',
            'parent_id'     => '1',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Raman',
            'city'          => 'Delhi',
            'distance'      => '0.46',
            'moons'   		=> '1',
            'year_id'       => '3',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '3',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Raju',
            'city'          => 'Mumbai',
            'distance'      => '0.43',
            'moons'   		=> '2',
            'year_id'       => '4',
            'class_cd'      => '2',
            'major_cd'      => '2',
            'parent_id'     => '2',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Yogesh',
            'city'          => 'Surat',
            'distance'      => '0.50',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '1',
            'parent_id'     => '4',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Rakesh',
            'city'          => 'UP',
            'distance'      => '0.69',
            'moons'   		=> '3',
            'year_id'       => '6',
            'class_cd'      => '2',
            'major_cd'      => '1',
            'parent_id'     => '5',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Rohit',
            'city'          => 'Punjab',
            'distance'      => '0.44',
            'moons'   		=> '2',
            'year_id'       => '4',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '6',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Raj',
            'city'          => 'Pune',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '3',
            'class_cd'      => '2',
            'major_cd'      => '1',
            'parent_id'     => '7',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Ranni',
            'city'          => 'Pune',
            'distance'      => '0.34',
            'moons'   		=> '1',
            'year_id'       => '2',
            'class_cd'      => '2',
            'major_cd'      => '1',
            'parent_id'     => '8',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Kapoor',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '4',
            'class_cd'      => '2',
            'major_cd'      => '1',
            'parent_id'     => '9',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Khan',
            'city'          => 'Mumbai',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '1',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '10',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Amair',
            'city'          => 'Channei',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '3',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Rohan',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '5',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Kajol',
            'city'          => 'Pune',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '6',
            'class_cd'      => '2',
            'major_cd'      => '1',
            'parent_id'     => '6',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Alia Batt',
            'city'          => 'Mumbai',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '1',
            'class_cd'      => '2',
            'major_cd'      => '2',
            'parent_id'     => '2',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Critina Kaif',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '9',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Wint',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '9',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Thiri',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '9',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Myaing',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '1',
            'parent_id'     => '4',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Ei',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '2',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '1',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Zin',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '4',
            'class_cd'      => '2',
            'major_cd'      => '2',
            'parent_id'     => '2',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Phyoe',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '9',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Hsu',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '4',
            'class_cd'      => '1',
            'major_cd'      => '2',
            'parent_id'     => '7',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Wai',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '6',
            'class_cd'      => '1',
            'major_cd'      => '1',
            'parent_id'     => '6',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Wai',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '5',
            'class_cd'      => '2',
            'major_cd'      => '2',
            'parent_id'     => '7',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('students')->insert([
            'name'          => 'Hnin',
            'city'          => 'Delhi',
            'distance'      => '0.43',
            'moons'   		=> '1',
            'year_id'       => '2',
            'class_cd'      => '2',
            'major_cd'      => '1',
            'parent_id'     => '10',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
    }
}
