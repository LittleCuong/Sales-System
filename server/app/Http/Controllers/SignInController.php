<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{
    //
    public function store(Request $request) { 
        if (Auth::attempt(array(
            'customer_email' => $request->email,
            'password' => $request->password
        ))) {
            // $id = Auth::user()->customer_id; 
            // return $id;
            $user = Auth::user()->load('cart'); 
            return $user;
        } else {
            return 'false';
        }
    }
}
