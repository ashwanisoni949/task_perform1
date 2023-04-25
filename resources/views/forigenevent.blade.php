@extends('layouts.app')
@section('content')
{{-- @dd($show_foriegn); --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
            <h1 class="text-center text-danger">Show Foriegn Data</h1>

            @php 
                $foriegn_id = session()->get('foriegn_id');
            @endphp
            <a href="{{ url('add-foriegn/'.$foriegn_id) }}" class="float-end"><button class="btn btn-dark">Add Foriegn</button></a>
            <div class="card mt-5">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" class="bg-warning text-center">Sr No</th>
                            <th scope="col" class="bg-warning text-center">Code</th>
                            <th scope="col" class="bg-warning text-center">R Event Date</th>
                            <th scope="col" class="bg-warning text-center">R Event Name</th>
                            <th scope="col" class="bg-warning text-center">Industry</th>
                            <th scope="col" class="bg-warning text-center">Category</th>
                            <th scope="col" class="bg-warning text-center">Created Date</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($show_foriegn as $key=> $item)
                          <tr>
                            <th scope="row" class="text-center">{{$key+1 }}</th>
                            <th scope="row" class="text-center">{{ $item->code }}</th>
                            <th scope="row" class="text-center">{{ $item->r_event_date }}</th>
                            <th scope="row" class="text-center">{{ $item->e_event_name }}</th>
                            <th scope="row" class="text-center">{{ $item->IndustryName1->name }}</th>
                            <th scope="row" class="text-center">{{ $item->CategoryName1->name }}</th>
                            <th scope="row" class="text-center">{{ $item->created_at->format('d-m-Y') }}</th>
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