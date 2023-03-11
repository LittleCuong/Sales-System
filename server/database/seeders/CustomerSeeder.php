<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'customer_id' => '1',
                'customer_name' => 'Nguyen Phu Cuong',
                'customer_email' => 'cuong@gmail.com',
                'password' => Hash::make('cuong'),
                'customer_gender' => 'male',
                'customer_date_of_birth' => '2002-9-2',
                'customer_point' => '1000'
            ],
            [
                'customer_id' => 2,
                'customer_name' => 'Phu Cuong Nguyen',
                'customer_email' => 'cuong123@gmail.com',
                'password' => Hash::make('cuong123'),
                'customer_gender' => 'male',
                'customer_date_of_birth' => '2002-9-2',
                'customer_point' => '1000'
            ]
        ];
        \DB::table('customer')->insert($data);
    }
}
