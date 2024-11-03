@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>

    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_barang">Jenis Barang</label>
            <input type="text" name="jenis_barang" class="form-control" value="{{ $barang->jenis_barang }}" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" name="stock" class="form-control" value="{{ $barang->stock }}">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="Tersedia" {{ $barang->status === 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Tidak Tersedia" {{ $barang->status === 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
            </select>
        </div>

        <div class="form-group">
            <label for="harga_satuan">Harga Satuan</label>
            <input type="text" name="harga_satuan" class="form-control" value="{{ $barang->harga_satuan }}">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
