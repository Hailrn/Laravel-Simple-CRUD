@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Produk</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ url('products/create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Kondisi</th>
                    <th>Tanggal Kadaluarsa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->unit }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->condition }}</td>
                        <td>{{ $product->date_expired }}</td>
                        <td>
                            <a href="{{ url('/products/' . $product->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('/products/' . $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
