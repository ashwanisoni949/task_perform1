@extends('layouts.app')
@section('content')
{{-- @dd($); --}}
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-4">
            <h1 class="text-center text-danger">Add Category Form</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ route('add-category') }}" method="POST">
                        @csrf
                    <div class="mt-3">
                        <label for="email">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mt-3">
                        <label for="email">name</label>
                        <select name="industry" id="" class="form-control">
                            <option value="">--Select Industry--</option>
                            @foreach ($all_industry as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit"  class="btn btn-warning mt-3 d-inline">Add Category</button>
                    </form>
                    <a href="{{ route('show-category') }} " class="d-inline">Show Category</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection