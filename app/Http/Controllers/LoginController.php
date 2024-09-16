<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }
    public function save(LoginFormRequest $request)
    {
        $data = $request->validated();

        if(auth()->attempt($data)){
            return redirect()->to('/');
        }else{
            return redirect()->back()->with('message','Email or password wrong');
        }
    }
}
