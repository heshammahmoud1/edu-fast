<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable=['name','price','teacher_id'];

    public function teacher(){
        return $this->belongsTo(Teachers::class,'teacher_id');
    }
}
