<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceDetailSeeder extends Seeder
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
                'customer_id' => 1,
                'product_id' => 1, 
                'quantity' => 1, 
                'price' => 58990000,
            ],
            [
                'invoice_serial' => 2, 
                'customer_id' => 2,
                'product_id' => 1, 
                'quantity' => 1, 
                'price' => 58990000,
            ],
        ];

        \DB::table('invoice_detail')->insert($data);
    }
}
