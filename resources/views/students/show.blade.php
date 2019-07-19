@extends('layouts.layout')

@section("title", "View Details Of - " . $student->student_name)

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <h1>About - {{ $student->student_name }}</h1> 
                <p><a class="btn btn-primary" href="/students/{{ $student->id }}/edit">Edit</a></p> 
                <form action="/students/{{ $student->id }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>  
            </div>
            <div class="col-12">
                <ul>
                    <li>Name: {{ $student->student_name }}</li>
                    <li>Roll: {{ $student->roll }}</li>
                    <li>Status: {{ $student->status }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection