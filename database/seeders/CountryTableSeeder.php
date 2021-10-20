<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $now = date('Y-m-d H:i:s');
        DB::table('countries')->delete();
        $countries = [
            ['code' => 'IN','name' => "India",'phonecode' => 91,'created_at' => $now, 'updated_at' => $now],
            ['code' => 'US','name' => "United States",'phonecode' => 1,'created_at' => $now, 'updated_at' => $now]
        ];
        DB::table('countries')->insert($countries);
    }
}
