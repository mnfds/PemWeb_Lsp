@extends('layouts.sidebar')
@section('body')
<div>
    <div class="container">
        <div class="row justify-content-center">
                <h1 class="text-center">Halaman Dashboard Admin</h1>
                <div class="col-3 bg-warning p-3 rounded text-center">
                    <span class="fw-bold">Jumlah Produk :</span>
                    {{ $data }}
                </div>
                <br>
        </div>
    </div>
</div>
@endsection