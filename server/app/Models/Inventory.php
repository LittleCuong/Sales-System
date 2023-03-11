<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $fillable = 
        [   'inventory_id', 
            'quantity', 
        ];

    public function product() {
        return $this->hasOne('App\Models\Product', 'inventory_id', 'inventory_id');
    }
}
