@extends('layouts.sidebar')
@section('body')
<div class="container mt-5">
    <form action="/creating" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center bg-warning rounded p-3">
            <div class="col-10">
                <div class="my-1">
                    <label class="form-label fw-bold">Nama barang</label>
                    <input class="form-control" type="text" name="judulProduk">
                </div>
                <div class="my-1">
                    <label class="form-label fw-bold" >Deskripsi barang</label>
                    <input class="form-control" type="text" name="deskripsi">
                </div>
                <div class="my-1">
                    <label class="form-label fw-bold">Harga barang</label>
                    <input class="form-control" type="number" name="harga">
                </div>
                <div class="my-1">
                    <label class="form-label fw-bold">Foto barang</label>
                    <input class="form-control" type="file" name="gambar">
                </div>
                <div class="text-center">
                    <button class="btn btn-outline-dark col-10" type="submit">create</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection