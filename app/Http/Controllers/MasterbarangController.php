<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Masterbarang;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

class MasterbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $randnum = random_int(100, 9999);
        $randmcode = "BR012".strtoupper(Str::random(5))."00".$randnum;

        $barang = DB::table('barang')->orderBy('namabrg', 'ASC')->get();

        return view('product.data', compact('randmcode', 'barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(isset($_POST['requestproduct'])){

            $data = $request->all();
            if ($request->hasFile('image')){
                $data['image'] = $request->file('image')->store('images', 'public');
            }
            Masterbarang::create($data);
            return redirect()->route('barang');
            
        }else{
            return redirect('barang');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
