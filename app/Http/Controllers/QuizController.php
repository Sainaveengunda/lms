<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
        public function index()
        {
            return view('quiz');
        }

        public function show($id)
        {
            $question = Question::find($id);
           return view('/quiz',compact('question'));
        }

}
