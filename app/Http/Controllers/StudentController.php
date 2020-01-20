<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students = Student::all();
        return view('student.dashboard',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        $students = new Student();
        $students->firstname = $request->input('firstname');
        $students->lastname = $request->input('lastname');
        $students->gender = $request->input('gender');
        $students->phone = $request->input('phone');
        $students->address = $request->input('address');
        $students->city = $request->input('city');
        $students->country = $request->input('country');

        $students->save();
        return redirect('/students')->with('flash_message_success','Student Data Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('student.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('student.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);

        $students = Student::find($id);

        $students->firstname = $request->input('firstname');
        $students->lastname = $request->input('lastname');
        $students->gender = $request->input('gender');
        $students->phone = $request->input('phone');
        $students->address = $request->input('address');
        $students->city = $request->input('city');
        $students->country = $request->input('country');

        $students->save();

        return redirect('/students')->with('flash_message_success','Student Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo $id;die;
        $students = Student::find($id);
        $students->delete();
        return redirect('/students')->with('flash_message_success','Student Data Deleted Successfully!');
    }
}
