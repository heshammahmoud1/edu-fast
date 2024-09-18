<?php

namespace App\Http\Controllers\admin;

use App\Models\Teachers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Http\Resources\TeacherResource;
use App\Http\Requests\SaveUserInfoFormRequest;

class TeacherController extends Controller
{
    public function index(){
        $teachers =Teachers::query()->orderBy('username')->paginate(5);
        $data= TeacherResource::collection($teachers);
        return view('admin.teacher.index',compact('data'));
    }
    public function create(){

        return view('admin.teacher.create');
    }
    public function store(TeacherRequest $request)
    {

        $data=$request->validated();

       Teachers::create($data);
        return redirect()->back()->with('msg', 'Teacher created successfully');


    }
    public function show($id){
        $teacher = Teachers::findorfail($id);
        return view('admin.teacher.show',compact('teacher'));
    }

    public function edit($id){
        $teacher = Teachers::findorfail($id);
        return view('admin.teacher.edit',compact('teacher'));
    }
    public function update(SaveUserInfoFormRequest $request,$id){
        $data = $request->validated();
        $student = Teachers::findorfail($id);
        $student->update($data);
        return redirect()->route('admin.teacher.index')->with('msg','teacher Updated Successfully');
    }

    public function destroy($id)
    {
        $teacher = Teachers::findorfail($id);
        $teacher->delete();
        return redirect()->back()->with('delete','Teacher deleted successfully');

    }
}

