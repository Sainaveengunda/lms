<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;
class FileController extends Controller
{

    public function index()
    {
        $files = File::orderBy('created_at','DESC')->paginate(30);
        return view('file.index', ['files' => $files]);
    }

    public function create()
    {
       return view('file.upload');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg.mp3,mp4,3gp|max:20000'
        ]);
        $upload = $request->file('file');
        $path = $upload->store('public/storage');
        $file = File::create([
            'title' => $upload->getClientOriginalName(),
            'description' => '',
            'path' => $path
        ]);
       return redirect('/file/upload')->with('success','');

    }
    
}
