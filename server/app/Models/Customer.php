<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Customer extends Authenticatable
{
    use HasFactory;
    
    protected $table = 'customer';
    protected $fillable = 
        [   'customer_id', 
            'customer_name', 
            'customer_email',
            'password', 
            'customer_gender', 
            'customer_date_of_birth', 
            'customer_point',
            'created_on',
        ];
    protected $hidden = ['password'];

    // public function setPasswordAttribute($value)
    // {
    //     if( \Hash::needsRehash($value) ) {
    //         $value = \Hash::make($value);
    //     }
    //     $this->attributes['customer_password'] = $value;
    // }

    public function invoice() {
        return $this->hasMany('App\Models\Invoice', 'customer_id', 'customer_id');
    }

    public function cart() {
        return $this->hasMany('App\Models\ShoppingCart', 'customer_id', 'customer_id');
    }    
}
