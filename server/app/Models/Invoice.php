<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = 
        [    
            'invoice_serial', 
            'invoice_value', 
            'invoice_reward_point',
            'created_on', 
        ]; 
    public $timestamps = FALSE;

    public function products() {
        return $this->belongsToMany('App\Models\Product', 'App\Models\InvoiceDetail', 'invoice_serial', 'product_id', 'invoice_serial', 'product_id');
    }

    public function invoiceDetail() {
        return $this->hasOne('App\Models\InvoiceDetail', 'invoice_serial', 'invoice_serial');
    }
}
