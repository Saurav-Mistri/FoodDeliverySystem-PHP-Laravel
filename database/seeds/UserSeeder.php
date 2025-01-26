<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert ([
            'usertype' => 'admin',
            'name' => 'Admin',
            'u_img' => 'logo.png',
            'address' => 'Chandkheda, Ahmedabad',
            'gender' => 'male',
            'phn_no' => '8140883574',
            'email' => 'drsdelivery2020@yaahoo.com',
            'password' => Hash::make('ljproject@123')
        ]);
    }
}
