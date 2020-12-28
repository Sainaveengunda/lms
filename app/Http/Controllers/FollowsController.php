<?php

namespace App\Http\Controllers;

use App\CourseUpload;


use Illuminate\Http\Request;



class FollowsController extends Controller
{
    public function store(int $courseId)
    {
        $course = CourseUpload::find($courseId);
        if(! $course){
            return 'failed';
        }
        $course->enrolls()->attach(auth()->user()->id);
        return redirect()->back();
    }
    public function enrolled()
    {
        return view('enrolledcourses');
    }
}
