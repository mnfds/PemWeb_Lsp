@extends('layouts.main')
@section('body')
<div class="container pt-5">
    <form action="/registeruser" method="post">
        @csrf
        <div class="row justify-content-center mt-3">
            <div class="col-6 bg-warning p-5 rounded">
                <h3 class="text-center fw-bold">
                    Register
                </h3>
                <div class="my-2">
                    <label class="form-label fw-bold" >username</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <div class="my-2">
                    <label class="form-label fw-bold" >password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button class="btn btn-outline-dark col-12" type="submit">daftar</button>
            </div>
        </div>
    </form>
</div>
@endsection