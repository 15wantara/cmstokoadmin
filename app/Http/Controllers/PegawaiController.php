<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index(Request $request)
    { 
        $data = DB::table('personel')->orderBy('id', 'ASC')->get();
        return view('home.pegawai.data', compact('data'));
    }

    public function create()
    {
        return view('home.pegawai.form', ['pegawai' => new Pegawai()]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nipegawai' => 'required|min:4|max:9|unique:personel',
            'nmlengkap' => 'required|unique:personel',
            'jkel' => 'required',
        ]);

        Pegawai::create([
            'nipegawai' => $request->nipegawai,
            'nmlengkap' => $request->nmlengkap,
            'jkel' => $request->jkel,
            'tgl_masuk' => date('Y-m-d'),
            'is_active' => 1,
        ]);
        return redirect()->route('personel')->with('success', 'Data personel berhasil ditambah.');
    }

    public function edit($id)
    {
       $pegawai = Pegawai::find($id);
       if(!$pegawai)
        {
            return redirect()->route('personel')
                ->with('warning', 'Pegawai Tidak ditemukan!');
        }
        return view('home.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->update([
            'nipegawai' => $request->nipegawai,
            'nmlengkap' => $request->nmlengkap,
            'jkel' => $request->jkel,
            'tgl_masuk' => date('Y-m-d'),
            'is_active' => $request->is_active,
            'updated_at' => date('Y:m:d H:i:s')
        ]);
        return redirect()->route('personel')->with('info', 'Data personel berhasil diperbarui!.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai;
    }
}
