<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthSeeder extends Seeder
{

    public function run()
    {


        $auth = array(
            array('user_id' => '1', 'app_id' => 'app_5555-7c1d-3f', 'api_token' => '5VqQdP7L9B9KuzA3xxNtTWow5GU0XaC5nk29agvksvlbG5AdLzpvHyIf5EDs', 'created_at' => '2019-10-25 05:31:27', 'updated_at' => '2019-11-14 09:35:15'),
            );

        foreach ($auth as $data) {
            DB::table('authenticates')->insert($data);
        }
    }
}
