<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\TeacherResource;
use App\Models\Courses;
use App\Models\Student;
use App\Models\Teachers;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
        //$Query= DB::table("teachers")->get()->all();
        //dd($Query);
        $courses =Courses::query()->with('teacher')->orderBy('id')->paginate(5);

        $data= CourseResource::collection($courses);
        //return $data;
        return view('admin.course.index', compact('data'));

    }
    public function create(){
     $teachers = Teachers::all();
        return view('admin.course.create', compact('teachers'));
    }
    public function store(CourseRequest $request)
    {

        $data=$request->validated();

        Courses::create($data);
        return redirect()->back()->with('msg', 'Course created successfully');


    }
    public function show($id){
        $course = Courses::findorfail($id);
        return view('admin.course.show',compact('course'));
    }
    public function destroy($id)
    {
        $course = Courses::findorfail($id);
        $course->delete();
        return redirect()->back()->with('delete','Course deleted successfully');

    }
    //edit a course and this func to edit the form
    public function edit($id){
        $teachers =Teachers::get();
        $course = Courses::findorfail($id);
        return view('admin.course.edit', compact('teachers','course'));
    }
    //update Query and this func to store the updated data within the form in DB
    public function update(CourseRequest $request,$id){
        $data = $request->validated();
        $course = Courses::findorfail($id);
        $course->update($data);
        return redirect()->route('admin.course.index')->with('msg','Course Updated Successfully');
    }
    // public function showcources() {
    //     // جلب جميع الكورسات من قاعدة البيانات
    //     $courses = Courses::all();
        
    //     // تمرير الكورسات إلى الـ view
    //     return view('front.services', compact('courses'));
    // }
    // public function teacher()
    // {
    //     return $this->belongsTo(Teachers::class);
    // }
}

