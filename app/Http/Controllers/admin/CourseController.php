<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\TeacherResource;
use App\Models\Courses;
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
    public function show(){
        return view('admin.course.show');
    }
}

