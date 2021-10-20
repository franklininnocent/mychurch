<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $now = date('Y-m-d H:i:s');
        DB::table('states')->delete();
        $states = [
            ['state_name' => 'Andhra Pradesh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Arunachal Pradesh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Assam','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Bihar','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Chhattisgarh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Goa','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Gujarat','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Haryana','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Himachal Pradesh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Jharkhand','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Karnataka','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Kerala','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Madhya Pradesh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Maharashtra','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Manipur','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Meghalaya','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Mizoram','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Nagaland','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Odisha','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Punjab','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Rajasthan','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Sikkim','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Tamil Nadu','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Telangana','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Tripura','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Uttar Pradesh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Uttarakhand','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'West Bengal','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Andaman and Nicobar Islands','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Chandigarh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Dadra and Nagar Haveli and Daman and Diu','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Delhi','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Jammu and Kashmir','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Ladakh','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Lakshadweep','country_id' => 1,'created_at' => $now, 'updated_at' => $now],
            ['state_name' => 'Puducherry','country_id' => 1,'created_at' => $now, 'updated_at' => $now]
        ];
        DB::table('states')->insert($states);
    }
}
