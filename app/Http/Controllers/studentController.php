<?php

namespace App\Http\Controllers;
use App\student;
use App\Academy;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('students.index', ['student' => $student]);
    }

    public function create(){
        $academy = Academy::all();
        $student = new Student();
        return view('students.create', compact('academy', 'student'));
    }

    public function store( Request $request ){
        $data = request()->validate([
            'student_name'  => 'required|min:3',
            'roll'          => 'required',
            'class'         => 'required',
            'status'        => 'required',
            'academy_id'    => ''
        ]);

        student::create($data);

        return redirect('students')->with('status', 'Successfully!!! Inserted User Info');
    }

    public function show(Student $student){
        return view('students.show', compact('student'));
    }

    public function edit(Student $student){
        $academy = Academy::all();
        return view('students.edit', compact('student', 'academy'));
    }
    
    public function update(Student $student){
        $data = request()->validate([
            'student_name'  => 'required|min:3',
            'roll'          => 'required',
            'class'         => 'required',
            'status'        => 'required',
            'academy_id'    => ''
        ]);
        $student->update( $data );
        return redirect('students/' . $student->id);
    }
}
