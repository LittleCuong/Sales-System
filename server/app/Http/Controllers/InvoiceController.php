<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use App\Models\InvoiceDetail;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $isExist = Invoice::select("*")->exists();

        if ($isExist) {
            $lastRecord = Invoice::orderBy('created_at')->first();
            $lastId = $lastRecord->invoice_serial;
            Invoice::create([
                'invoice_serial' => $lastId + 1,
                'invoice_value' => $request->quantity*$request->product_current_price,
                'invoice_reward_point' => round($request->product_current_price/1000000),
                'created_at' => now()
            ]);
            InvoiceDetail::create([
                'invoice_serial' => $lastId + 1,
                'customer_id' => $request->userId,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->quantity*$request->product_current_price,
            ]);
            return 'success';
        } else {
            Invoice::create([
                'invoice_serial' => 1,
                'invoice_value' => $request->quantity*$request->product_current_price,
                'invoice_reward_point' => round($request->product_current_price/1000000),
                'created_at' => now()
            ]);
            InvoiceDetail::create([
                'invoice_serial' => 1,
                'customer_id' => $request->userId,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->quantity*$request->product_current_price,
            ]);
            return 'success';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
