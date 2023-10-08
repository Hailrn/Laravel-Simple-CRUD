@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Tambah Produk Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/products') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" class="form-control" required {{ old('name') }}>
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <input type="text" name="category" class="form-control" required {{ old('category') }}>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" name="price" class="form-control" required {{ old('price') }}>
            </div>
            <div class="form-group">
                <label for="unit">Satuan</label>
                <input type="text" name="unit" class="form-control" required {{ old('unit') }}>
            </div>
            <div class="form-group">
                <label for="condition">Kondisi</label>
                <select name="condition" class="form-control">
                    <option value="baik">Baik</option>
                    <option value="kurang baik">Kurang Baik</option>
                    <option value="rusak">Rusak</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Kadaluarsa</label>
                <input type="date" class="form-control" name="date_expired">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
