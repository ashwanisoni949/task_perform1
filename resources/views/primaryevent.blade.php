@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-4">
                <h1 class="text-center text-danger">Add Primary Event</h1>
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{ route('add-primary') }}" method="POST">
                            @csrf
                            <div class="mt-3">
                                <label for="email">Master Code</label>
                                <input type="text" class="form-control" name="code">
                            </div>
                            <div class="mt-3">
                                <label for="email">Event Date</label>
                                <input type="date" class="form-control" name="event_date">
                            </div>
                            <div class="mt-3">
                                <label for="email">Event Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mt-3">
                                <label for="email">Industry</label>
                                <select name="industry_id" id="" class="form-control">
                                    <option value="">--Select Industry Name</option>
                                    @foreach ($all_category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="email">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">--Select Category Name--</option>
                                    @foreach ($all_industry as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <button type="submit" class="btn btn-warning mt-3 d-inline">Add Primary</button>
                        </form>
                        <a href="{{ route('show-primary') }}" class="d-inline">Show Primary</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
