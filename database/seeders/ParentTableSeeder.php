<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ParentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parents')->truncate();
        DB::table('parents')->insert([
            'id'            => '1',
            'name'          => 'U Kyaw',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '2',
            'name'          => 'U Hla',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '3',
            'name'          => 'U Ba',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '4',
            'name'          => 'U Mya',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '5',
            'name'          => 'U Aung',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '6',
            'name'          => 'U Maung',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '7',
            'name'          => 'U Naung',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '8',
            'name'          => 'U Myint',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '9',
            'name'          => 'U Win',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
        DB::table('parents')->insert([
            'id'            => '10',
            'name'          => 'U Ye',
            'created_by' 	=> '1',
            'updated_by' 	=> '1',
            'created_at' 	=> date('Y-m-d H:i'),
            'updated_at' 	=> date('Y-m-d H:i')
        ]);
    }
}
