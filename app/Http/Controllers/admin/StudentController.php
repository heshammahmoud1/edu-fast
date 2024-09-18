<?php

namespace App\Http\Controllers\admin;
use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Http\Resources\TeacherResource;
use App\Http\Requests\SaveUserInfoFormRequest;

class StudentController extends Controller
{
    public function index(){

        $students =Student::query()->orderBy('username')->paginate(5);
        $data= StudentResource::collection($students);
        return view('admin.student.index',compact('data'));
    }
    public function show($id){
        $student = Student::findorfail($id);
        return view('admin.student.show',compact('student'));
    }
    public function destroy($id)
    {
        $student = Student::findorfail($id);
        $student->delete();
        return redirect()->back()->with('delete','Student deleted successfully');

    }
    public function edit($id){
        $student = Student::findOrFail($id);
        return view('admin.student.edit', compact('student'));
    }
    //update Query and this func to store the updated data within the form in DB
    public function update(SaveUserInfoFormRequest $request,$id){
        $data = $request->validated();
        $student = Student::findorfail($id);
        $student->update($data);
        return redirect()->route('admin.student.index')->with('msg','student Updated Successfully');
    }
}

