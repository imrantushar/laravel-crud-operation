@extends('layouts.app')

@section("title", "Add Student")

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <h4>Add Students</h4>
                <form action="/students" method="POST">
                    @include('students.form')
                    <button class="btn btn=active mb-2" type="submit">Add Student</button>
                   
                </form>
            </div>
        </div>
    </div>
@endsection