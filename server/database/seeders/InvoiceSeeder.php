<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [ 
                'invoice_serial' => 1, 
                'invoice_value' => 58990000, 
                'invoice_reward_point' => '5800',            
            ],
            [ 
                'invoice_serial' => 2, 
                'invoice_value' => 58990000, 
                'invoice_reward_point' => '5800',
            ],
        ];

        \DB::table('invoice')->insert($data);

    }
}
