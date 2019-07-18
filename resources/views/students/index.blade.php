@extends('layouts.layout')

@section("title", "All Student")

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <h4>All Students</h4>
                @foreach ($student as $item)
                    <div class="row">
                        <div class="col-3"><a href="students/{{$item->id}}">{{ $item->student_name }}</a></div>
                        <div class="col-3">{{ $item->roll }}</div>
                        <div class="col-3">{{ $item->status }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection