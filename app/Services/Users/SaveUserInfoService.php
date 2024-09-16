<?php

namespace App\Services\Users;

use App\Models\Student;

class SaveUserInfoService
{
    public static function save($data, $id=null){

        return Student::query()->updateOrCreate(['id'=>$id],$data);
    }
}
