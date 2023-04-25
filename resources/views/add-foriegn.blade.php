@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-4">
            <h1 class="text-center text-danger">Add Foriegn</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ route('add-foriegn_data') }}" method="POST">
                        @csrf
                        <input type="hidden" name="primary_id" value="{{ $primary_id }}">
                        <div class="mt-3">
                            <label for="email">Master Code</label>
                            <input type="text" class="form-control" name="code">
                        </div>
                        <div class="mt-3">
                            <label for="email">R Event Date</label>
                            <input type="date" class="form-control" name="r_event_date">
                        </div>
                        <div class="mt-3">
                            <label for="email">R Event Name</label>
                            <input type="text" class="form-control" name="e_event_name">
                        </div>
                        <div class="mt-3">
                            <label for="email">Category</label>
                            <select name="industry_id" id="" class="form-control">
                                <option value="">--Select Category Name</option>
                                @foreach ($all_category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="email">Industry</label>
                            <select name="category_id" id="" class="form-control">
                                <option value="">--Select Industry Name--</option>
                                @foreach ($all_industry as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <button type="submit" class="btn btn-warning mt-3 d-inline">Add Foriegn</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection