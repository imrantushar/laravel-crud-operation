@extends('layouts.layout')

@section("title", "Edit Student For -" . $student->student_name)

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <h4>Edit Student - {{ $student->student_name }}</h4>
                <form action="/students/{{ $student->id }}" method="POST">
                    @method('PATCH')
                    @include('students.form')
                    <button class="btn btn=active mb-2" type="submit">Update Student</button>
                </form>
            </div>
        </div>
    </div>
@endsection