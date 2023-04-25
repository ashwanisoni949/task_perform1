@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <h1 class="text-center text-danger">Show Primary</h1>
            <a href="{{ route('primary-form') }}" class="float-end"><button class="btn btn-dark">Add Primary</button></a>
            <div class="card mt-5">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" class="bg-warning text-center">Sr No</th>
                            <th scope="col" class="bg-warning text-center">Code</th>
                            <th scope="col" class="bg-warning text-center">Date</th>
                            <th scope="col" class="bg-warning text-center">Name</th>
                            <th scope="col" class="bg-warning text-center">Industry</th>
                            <th scope="col" class="bg-warning text-center">Category</th>
                            <th scope="col" class="bg-warning text-center">Created Date</th>
                            <th scope="col" class="bg-warning text-center">Action</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_priamry as $key=> $item)
                          <tr>
                            <th scope="row" class="text-center">{{$key+1 }}</th>
                            <th scope="row" class="text-center">{{ $item->code }}</th>
                            <th scope="row" class="text-center">{{ $item->date }}</th>
                            <th scope="row" class="text-center">{{ $item->name }}</th>
                            <th scope="row" class="text-center">{{ $item->IndustryName->name }}</th>
                            <th scope="row" class="text-center">{{ $item->CategoryName->name }}</th>
                            <th scope="row" class="text-center">{{ $item->created_at->format('d-m-Y') }}</th>
                            <th scope="row" class="text-center">
                                <a href="{{url('add-foriegn/'.$item->id) }}">Foriegn add</a>/
                                <a href="{{url('show-foriegn/'.$item->id) }}">Foriegn Show</a>
                                {{ session()->put('foriegn_id',$item->id)}}
                            </th>
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