@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-4">
            <h1 class="text-center text-danger">Add Industry Form</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ route('add-industry') }}" method="POST">
                        @csrf
                    <div class="mt-3">
                        <label for="email">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <button type="submit"  class="btn btn-warning mt-3 d-inline">Add Industry</button>
                    </form>
                    <a href="{{ route('show-industry') }} " class="d-inline">Show Industry</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection