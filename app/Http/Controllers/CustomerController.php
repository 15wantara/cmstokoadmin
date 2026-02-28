<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = DB::table('customers')->orderBy('id', 'ASC')->get();
        return view('home.customer.data', compact('customer'));
    }
}
