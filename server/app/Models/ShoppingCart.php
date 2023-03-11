<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'shopping_cart';
    protected $fillable = 
        [    
            'customer_id',
            'product_id', 
            'quantity',
        ];    

    public function customer() {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'customer_id');
    }    
}
