<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use FFMpeg;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


use App\User;

use App\CourseUpload;

class CourseUploadController extends Controller
{
    
    public function index()
    {
        return view('/CourseUpload');
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        
        //dump(request()->all());


       $this->validate(request(),[
           
            'course_title' => 'required',
            'course_subtitle' => 'required',
            'course_description' => 'required',
            'course_language' => 'required',
            'course_difficulty' => 'required',
            'course_category' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:20000',
            'video' => 'required|file|mimes:mp4'
        ]);

        $image_upload=$request->file('image');
        $course_image=$image_upload->store('public/uploads/image');
        $video_upload=$request->file('video');
        $course_video=$video_upload->store('public/uploads/video');
        //$course = Courseupload::Create();
        $courses=CourseUpload::Create([
            'course_title' =>request('course_title'),
            'course_subtitle' =>request('course_subtitle'),
            'course_description' =>request('course_description'),
            'course_language' =>request('course_language'),
            'course_difficulty' =>request('course_difficulty'),
            'course_category' =>request('course_category'),
            'course_image' => $course_image,
            'course_video' => $course_video
        ]);
        return redirect()->back()->with('message','Uploaded Courses Sucessfully');

    }

    public function show($id)
    {
        //dd($id);
        $article = CourseUpload::find($id);

        return view('/courses',compact('article'));
    }

    public function enrolled($id)
    {
        //dd($id);
       
        $article = CourseUpload::find($id);

        /*$filename="{{ Storage::url($article->course_image) }}" ;

        $getID3 = new \getID3;

        $video_file = $getID3->analyze($filename);
        $duration_seconds = $video_file['playtime_string'];
        //$video_path="{{ Storage::url($article->course_video) }}" ;
        $getID3 = new \getID3;
        $file = $getID3->analyze('{{ Storage::url($article->course_video) }}');
        $duration = date('H:i:s.v', $file['playtime_seconds']);
        //require_once 'public/storage/uploads/video/{{ $article->course_video }}';
        $ffprobe = FFMpeg\FFProbe::create();
        $ffprobe
        ->format('public/storage/uploads/video/{{ $article->course_video }}') // extracts file informations
        ->get('duration'); */

        return view('/enrolledcourses',compact('article'));
    }
   
   



    public function category()
    {
        $data = CourseUpload::all();
        return view('/categories',[ 'data' => $data] );
    }
    public function business()
    {
        $data = CourseUpload::all();
        return view('/bussiness',[ 'data' => $data] );
    }
    public function health()
    {
        $data = CourseUpload::all();
        return view('/health',[ 'data' => $data] );
    }
    public function marketing()
    {
        $data = CourseUpload::all();
        return view('/marketing',[ 'data' => $data] );
    }
    public function photo()
    {
        $data = CourseUpload::all();
        return view('/photo',[ 'data' => $data] );
    }

   /* public function enroll(int $courseId)
    {
        $data = CourseUpload::find($courseId);
        if(!course){
            return 'failed';
        }
        $course->enrolls()->attach(auth()->user()->id);
        return redirect()->back()->with('message','you enrolled for the course sucessfully');
        //return view('/enroll',[ 'data' => $data] );
    }*/
    public function mycourses($id)
    {
        $course = CourseUpload::find($id);
        return view('/mycourses',[ 'course' => $course] );
        //$course->auth()->user()->id;
        //return redirect()->back()->with('message','you enrolled for the course sucessfully');
        //return view('/mycourses',[ 'data' => $data] );
    }
  


    public function search()
    {
        $search_text = $_GET['query'];
        $products= CourseUpload::where('course_title', 'LIKE', '%'.$search_text.'%')->get();
        return view('search',compact('products'));
    }
}
