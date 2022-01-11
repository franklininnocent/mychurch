<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $now = date('Y-m-d H:i:s');
        DB::table('roles')->insert([
            [
                'name' => 'Super Administrator',
                'slug' => 'superadmin',
                'description'=>'Super Administrator Role',
                'level' => 1,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],[
                'name' => 'Administrator',
                'slug' => 'administrator',
                'description'=>'Administrator Role',
                'level' => 2,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Parish Administrator',
                'slug' => 'parishadministrator',
                'description'=>'Parish Administrator Role',
                'level' => 3,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],[
                'name' => 'Priest',
                'slug' => 'priest',
                'description'=>'Priest Role',
                'level' => 4,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],[
                'name' => 'Manager',
                'slug' => 'manager',
                'description'=>'Manager Role',
                'level' => 5,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],[
                'name' => 'Accountant',
                'slug' => 'accountant',
                'description'=>'Accountant Role',
                'level' => 6,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],[
                'name' => 'Parishioner',
                'slug' => 'parishioner',
                'description'=>'Parishioner Role',
                'level' => 7,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);

    }
}
