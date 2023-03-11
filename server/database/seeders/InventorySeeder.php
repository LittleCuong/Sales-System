<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
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
            ['inventory_id' => 1, 'quantity' => 20],
            ['inventory_id' => 2, 'quantity' => 16],
            ['inventory_id' => 3, 'quantity' => 30],
            ['inventory_id' => 4, 'quantity' => 20],
        ];
        \DB::table('inventory')->insert($data);
    }
}
