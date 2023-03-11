<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = 
        [   'product_id', 
            'product_name', 
            'product_image', 
            'product_unit', 
            'product_current_price',
            'product_availalbe',
            'category_id',
            'added_on'
        ];

    public function invoiceDetail() {
        // belongsToMany(Bảng đích(1), Bảng trung gian(2), khoá ngoại (2), khoá ngoại (2->1), khoá chính local, khoá chính (1))
        return $this->belongsToMany('App\Models\Invoice', 'App\Models\InvoiceDetail', 'product_id', 'invoice_serial', 'product_id', 'invoice_serial');
    }

    public function trademark() {
        return $this->hasOne('App\Models\Trademark', 'trademark_id', 'trademark_id');
    }

    public function inventory() {
        return $this->belongsTo('App\Models\Inventory', 'inventory_id', 'inventory_id');
    }

    public function coreComponent() {
        return $this->hasOne('App\Models\ComputerComponent', 'product_id', 'product_id');
    }
}
