@extends('layouts.sidebar')
@section('body')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10 bg-warning rounded p-2">
            <table class="table table-bordered text-light text-center">
                <tr class="fw-bold">
                    <td>Produk</td>
                    <td>Deskripsi produk</td>
                    <td>Harga</td>
                    <td>Foto</td>
                    <td>Keterangan</td>
                </tr>
                @foreach ($data as $produk)
                    <tr>
                        <td>{{ $produk->judulProduk }}</td>
                        <td>{{ $produk->deskripsi }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>
                            <img width="100" src="{{ asset('storage/gambar/'.$produk->gambar) }}" alt="">
                            </td>
                        <td>
                            <a class="badge bg-dark text-decoration-none" href="/edit/{{ $produk->id }}">edit</a>
                            <a class="badge bg-dark text-decoration-none" href="/delete/{{ $produk->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection