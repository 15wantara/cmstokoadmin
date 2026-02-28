<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index()
    {
        $barang = DB::table('baranginout')
        ->join('barang', 'baranginout.barang_id', '=', 'barang.id')
        ->where('baranginout.stock', '!=', '0')->get();
        return view('product.in', compact('barang'));
    }

    public function form()
    {
        $randnum = random_int(100, 9999);
        $randmcode = "BR012".strtoupper(Str::random(5))."00".$randnum;
        $supplier = DB::table('supplier')->where('is_active', 'active')->get();
        return view('product.form', compact('randmcode', 'supplier'));
    }

    public function store(Request $request)
    {
        Barang::create([
            'barcodeinout' => $request->barcode,
            'nomorbatch' => $request->nomorbatch,
            'namabarang' => $request->namabrg,
            'supplier_id' => $request->supplier,
            'statusbrg' => 'in',
            'stock' => $request->stock,
            'brg_masuk' => date('Y-m-d'),
            'brg_exp' => $request->expireddate,
            'fotobukti' => 'fotobaranginout.png',
            'user_id' => Auth::user()->id,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->route('barangin')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id){
        $query = DB::table('baranginout')->where('product_id', $id)->get();
        dd($query);
    }
}
