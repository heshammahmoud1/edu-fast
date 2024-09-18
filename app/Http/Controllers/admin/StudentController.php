<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Http\Resources\TeacherResource;
use App\Models\Student;

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
}

