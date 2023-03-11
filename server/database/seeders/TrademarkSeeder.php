<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrademarkSeeder extends Seeder
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
            ['trademark_id' => 1, 'trademark_name' => 'Asus', 'trademark_image' => 'https://dlcdnimgs.asus.com/images/logo/logo-blue001.svg'],
            ['trademark_id' => 2, 'trademark_name' => 'Acer', 'trademark_image' => 'https://images.acer.com/is/content/acer/Acer-logo'],
            ['trademark_id' => 3, 'trademark_name' => 'MSI', 'trademark_image' => 'https://storage-asset.msi.com/frontend/imgs/logo.png'],
            ['trademark_id' => 4, 'trademark_name' => 'Gigabyte', 'trademark_image' => 'https://seeklogo.com/images/G/gigabyte-logo-84547E3D5E-seeklogo.com.png'],
        ];
        \DB::table('trademark')->insert($data);
    }
}
