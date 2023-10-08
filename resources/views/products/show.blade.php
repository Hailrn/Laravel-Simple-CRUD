@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Produk</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->category }}</p>
                <p class="card-text">{{ $product->unit }}</p>
                <p class="card-text">{{ $product->price }}</p>
                <p class="card-text">{{ $product->condition }}</p>
                <p class="card-text">{{ $product->date_expired }}</p>
                <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-warning">Edit</a>
                <form action="{{ url('/products/' . $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                </form>
                <a href="{{ url('/') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
