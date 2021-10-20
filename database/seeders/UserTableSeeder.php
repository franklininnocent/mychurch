<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $now = date('Y-m-d H:i:s');
        DB::table('users')->insert([
            [
                'name' => 'Franklin Innocent F',
                'email' => 'franklininnocent.fs@gmail.com',
                'email_verified_at' => $now,
                'password' => Hash::make('Secret123'),
                'phone' =>9442466036,
                'active' => 1,
                'role_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
