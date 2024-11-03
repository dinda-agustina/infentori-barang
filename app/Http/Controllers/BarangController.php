<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{

    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }


    public function create()
    {
        return view('barang.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stock' => 'nullable|integer|min:0',
            'status' => 'nullable|string|max:20',
            'harga_satuan' => 'nullable|numeric|between:0,99999999.99',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index');
    }


    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stock' => 'nullable|integer',
            'status' => 'nullable|string|max:20',
            'harga_satuan' => 'nullable|numeric|between:0,99999999.99',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index');
    }


    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index');
    }
}
