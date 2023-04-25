@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-4">
            <h1 class="text-center text-danger">Show Category</h1>
            <a href="{{ route('form-industry') }}" class="float-end"><button class="btn btn-dark">Add Category</button></a>
            <div class="card mt-5">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" class="bg-warning text-center">Sr No</th>
                            <th scope="col" class="bg-warning text-center">Category Name</th>
                            <th scope="col" class="bg-warning text-center">Industry Name</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_category as $key=> $item)
                          <tr>
                            <th scope="row" class="text-center">{{$key+1 }}</th>
                            <th scope="row" class="text-center">{{ $item->name }}</th>
                            <th scope="row" class="text-center">{{ $item->Industry_name->name }}</th>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection