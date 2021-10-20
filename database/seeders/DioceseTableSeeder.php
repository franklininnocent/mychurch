<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DioceseTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $now = date('Y-m-d H:i:s');
        DB::table('diocese')->delete();
        $diocese = [
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Archdiocese of Madras-Mylapore','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Archdiocese of Madurai','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 36,'diocese_name' => 'Archdiocese of Cuddalore- Pondicherry','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Dindigul','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Thanjavaur','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Dharmapuri','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Palayamkottai','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Kottar','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Thiruchirapalli','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Chengleput','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Kumbakonam','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Salem','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Coimbatore','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Ooty','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Tuticorin','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Sivagangai','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Sivagangai','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Kuzhithurai','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Thuckalay','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Ramanathapuram','active'=>true,'created_at' => $now, 'updated_at' => $now],
            ['country_id' => 1,'state_id' => 23,'diocese_name' => 'Diocese of Marthandom','active'=>true,'created_at' => $now, 'updated_at' => $now]

        ];
        DB::table('diocese')->insert($diocese);
    }
}
