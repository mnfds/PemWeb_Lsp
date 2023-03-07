@extends('layouts.main')
@section('body')
    <div class="container pt-5">  
        <form action="/proseslogin" method="post">
            @csrf
            <div class="row justify-content-center mt-3">
                <div class="col-6 bg-warning p-5 rounded">
                    <h3 class="text-center fw-bold">
                        Login
                    </h3>
                    <div class="my-2">
                        <label class="form-label fw-bold" >username</label>
                        <input class="form-control" type="text" name="username">
                    </div>
                    <div class="my-2">
                        <label class="form-label fw-bold" >password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-dark col-12" type="submit">login</button>
                        <a class="text-decoration-none fw-bold text-dark" href="/register">register</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection