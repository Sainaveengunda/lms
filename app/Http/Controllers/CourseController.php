<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Models\User;


class CourseController extends Controller
{
    public function show()
    {
        //
    }

    public function save(Request $req)
    {
        $course = new Course;
        $course->course_title=$req->course_title;
        $course->course_subtitle=$req->course_subtitle;
        $course->course_description=$req->course_description;
        $course->course_language=$req->course_language;
        $course->course_difficulty=$req->course_difficulty;
        $course->course_category=$req->course_category;
         $course->save();
       print_r($req->input());
    }
}