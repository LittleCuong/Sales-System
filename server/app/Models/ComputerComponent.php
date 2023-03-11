<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerComponent extends Model
{
    use HasFactory;

    protected $table = 'product_components';
    protected $fillable = 
        [   
            'product_id',
            'product_brand',
            'product_guarantee',
            'product_cpu',
            'product_ram',
            'product_max_ram',
            'product_vga',
            'product_size',
            'product_panel',
            'product_resolution',
            'product_refresh_rate',
            'product_screen_tech',
            'product_ssd',
            'product_sound_tech',
            'product_connect',
            'product_keyboard',
            'product_security',
            'product_lan',
            'product_webcam',
            'product_wifi',
            'product_bluetooth',
            'product_weight',
            'product_battery',
            'product_os',
            'product_color',
            'product_dimension',
            'created_on'
        ];

    public function computer() {
        return $this->hasOne('App\Models\Product', 'product_id', 'computer_id');
    }
}
