<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run()
    {
        $users = array(
            array('id' => '1', 'name' => 'Michel Jarre', 'active' => '1', 'block' => '0', 'mobile' => '09127500206',
                'passcode' => NULL, 'expire_passcode' => '2019-10-29 12:24:27','created_at'=>'2020-09-05 10:24:12'),
            );


        foreach ($users as $data) {
            DB::table('users')->insert($data);
        }
    }
}
