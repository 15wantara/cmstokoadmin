<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function salesPenjualan()
    {
        return view('sales.penjualan');
    }

    public function reportPegawai()
    {
        return view('sales.reportpegawai');
    }

    public function salesPreorder()
    {
        return view('sales.preorder');
    }
}
