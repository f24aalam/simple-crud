<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();

        return view('students.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'teacher' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required'
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->teacher_id = $request->teacher;
        $student->city = $request->city;
        $student->state = $request->state;
        $student->address = $request->address;

        $student->save(); // insert into students

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student->load('teacher');

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // $student = Student::find($id);
        $teachers = Teacher::all();

        return view('students.edit', compact('student', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'teacher' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required'
        ]);

        // $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->teacher_id = $request->teacher;
        $student->city = $request->city;
        $student->state = $request->state;
        $student->address = $request->address;

        $student->save(); // update students set name =

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // $student = Student::find($id);
        $student->delete();

        return redirect('/students');
    }
}
