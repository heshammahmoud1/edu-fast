<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserInfoFormRequest;
use App\Models\Student;
//use App\Services\Users\SaveUserInfoService;
use App\Services\Users\SaveUserInfoService;
use Illuminate\Http\Request;


class RegisterController extends Controller
{

    public function index()
    {
//        return auth()->user();
        return view('auth.register');
    }
    public function save(SaveUserInfoFormRequest $request)
    {
        $data = $request->validated();


//        $file =$request->file('image');
//        if($file==null){
//            $image_name = 'default.png';
//        }else{
//            $image_name = $this->upload($file,'users');
//        }

       $student = SaveUserInfoService::save($data);

        return redirect()->back()->with('Message','Student Registered Successfully');
    }
}
