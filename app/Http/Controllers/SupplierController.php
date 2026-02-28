<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
        $sup = DB::table('supplier')->get();
        return view('home.supplier.data', compact('sup'));
    }
}
