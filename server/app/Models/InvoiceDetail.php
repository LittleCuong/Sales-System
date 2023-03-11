<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    
    protected $table = 'invoice_detail';
    protected $fillable = 
        [   
            'invoice_serial', 
            'customer_id',
            'product_id', 
            'quantity',
            'price',
        ];

    public $timestamps = FALSE;
    
    public function customer() {
        return $this->hasOne('App\Models\Customer', 'customer_id', 'customer_id');
    }    

    public function invoices() {
        return $this->belongsTo('App\Models\Invoice', 'invoice_serial', 'invoice_serial');
    }
}
