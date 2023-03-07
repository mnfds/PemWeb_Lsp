@extends('layouts.sidebar')
@section('body')
<div class="container mt-5">
    <form action="/editing/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-8 bg-warning rounded p-2">
                <div>
                    <img class="img-fluid img-thumbnail" width="100" src="{{ asset('storage/gambar/'.$data->gambar) }}" alt="">
                </div>
                <div class="my-1">
                    <label class="form-label fw-bold">Nama barang</label>
                    <input class="form-control" type="text" value="{{ $data->judulProduk }}" name="judulProduk">
                </div>
                <div class="my-1">
                    <label class="form-label fw-bold">Deskripsi barang</label>
                    <input class="form-control" type="text" value="{{ $data->deskripsi }}" name="deskripsi">
                </div>
                <div class="my-1">
                    <label class="form-label fw-bold">Harga barang</label>
                    <input class="form-control" type="text" value="{{ $data->harga }}" name="harga">
                </div>
                <div class="my-1">
                    <label class="form-label fw-bold">Gambar</label>
                    <input class="form-control" type="file" value="{{ $data->gambar }}" name="gambar">
                </div>
                <button class="btn btn-outline-dark col-12" type="submit">edit</button>
            </div>
        </div>
    </form>
</div>
@endsection