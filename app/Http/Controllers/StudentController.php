<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function get_all_student() {
        $students = Student::all();
        return view('student.student_manage', ['students' => $students]);
    }


    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
        Student::create([
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
        return redirect('student');
    }

    public function get_student_by_id($id) {
        $student_by_id = Student::find($id);
        return view('student.student_edit', ['student_by_id' => $student_by_id]);
    }

    public function edit(Request $request,$id) { 
        $student_update = Student::find($id);
        $student_update->fullname = $request->fullname;
        $student_update->birthday = $request->birthday;
        $student_update->address = $request->address;
        $student_update->save();
        return redirect('student');
    }
}