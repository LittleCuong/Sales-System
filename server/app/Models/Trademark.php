<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;

    protected $table = 'trademark';
    protected $fillable = 
        [   'trademark_id', 
            'trademark_name', 
            'trademark_image',
        ];
        
    public function products() {
        return $this->hasMany('App\Models\Product', 'trademark_id', 'trademark_id');
    }
}
