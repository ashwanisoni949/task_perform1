@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-4">
            <h1 class="text-center text-danger">Login Form</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ route('custsom-login') }}" method="POST">
                        @csrf
                    <div class="mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mt-3">
                        <label for="email">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit"  class="btn btn-warning mt-3">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection