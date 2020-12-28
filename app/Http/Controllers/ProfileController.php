<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Profile;
class ProfileController extends Controller
{
    public function index()
    {
        return view('/example');
    }


    public function show($id)
    {
           $article = Profile::find($id);
           return view('/example', ['article' => $article]);
    }

    public function create()
    {
        return view('/profile');
    }
    public function store()
    {
        $article = new Profile();
        $article->profile_name= request('profile_name');
        $article->profile_work= request('profile_work');
        $article->profile_education= request('profile_education');
        $article->profile_bio= request('profile_bio');
        $article->profile_country= request('profile_country');
        $article->profile_location= request('profile_location');
        $article->profile_industry= request('profile_industry');
        
        $article->save();
        return redirect('/profile/create');
        

    }
    public function edit($id)
    {
        $article = Profile::find($id);
        return view('/edit', compact('article'));
    }

    public function update($id)
    {
        $article = Profile::find($id);
        $article->profile_name= request('profile_name');
        $article->profile_work= request('profile_work');
        $article->profile_education= request('profile_education');
        $article->profile_bio= request('profile_bio');
        $article->profile_country= request('profile_country');
        $article->profile_location= request('profile_location');
        $article->profile_industry= request('profile_industry');
        
        $article->save();

        return redirect('/profile/10');

    }

   /* public  function index()
    {
        return view('/profile');
    }
    

    public function store()
    {
       // dump(request()->all());
       $data = new Profile();

        $data->profile_name= request('profile_name');
        $data->profile_work= request('profile_work');
        $data->profile_education= request('profile_education');
        $data->profile_bio= request('profile_bio');
        $data->profile_country= request('profile_country');
        $data->profile_location= request('profile_location');
        $data->profile_industry= request('profile_industry');
        
        $data->save();
        return redirect('/profile');
    }
    public function show()
    {
        $data = Profile::all();
        return view('/editprofile', compact('data'));

    }
    public function edit()
    {
        $data = Profile::all();
        return view('/edit', [ 'data' => $data]);
    }
    public function update()
    {
        $data = Profile::all();

        $data->profile_name= request('profile_name');
        $data->profile_work= request('profile_work');
        $data->profile_education= request('profile_education');
        $data->profile_bio= request('profile_bio');
        $data->profile_country= request('profile_country');
        $data->profile_location= request('profile_location');
        $data->profile_industry= request('profile_industry');
        
        $data->save();
        return redirect('/editprofile');
        

    }*/
}
