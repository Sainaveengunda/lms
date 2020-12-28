<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nav Academy</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">   
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<!-- import JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
  
       
</head>
<body>
<!-- Header or Navbar -->

<div class="flex flex-row">
        <div class="font-serif text-black text-center bg-white m-2 mt-8">
                <a href="{{ url('/home')}}"class="text-2xl  mt-8"><h1>RockED</h1></a>
        </div>
         <div class="text-black text-center bg-white">
                <p class="px-4 py-2 mt-8 text-lg">Programs</p>
         </div>
         <div>
         <input type="text" icon="el-icon-search" class="border border-4 rounded-full border-gray-200 bg-gray-200 hover:gray:300 px-64 py-3 mt-8" name="search" placeholder="Search Here!!">
            
         </div>
            <div class="mt-8 py-4 px-2 w-7">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
             </svg>
            </div>
         <div class="text-black text-center bg-white px-2">
            <p class="px-2 py-10 text-lg"><a href="{{ url('/teach') }}">Teach Here</a></p>
         </div>
         <div class="text-black text-center bg-white px-2">
            <p class="px-2 py-10 text-lg"><a href="{{ url('/teach') }}">About Us</a></p>
         </div>
         <div class="m-2 mt-8 ml-24">
         <form action="/logout" method="POST">
             @csrf
                <input type="submit" value="Logout" class="bg-blue-700 hover:red-600 text-xl text-white font-serif rounded">
         </form>
         </div>
</div>
<hr class="border-full border-yellow-600">

<h1 class="text-center text-4xl text-black font-serif"> Courses Upload</h1>

<div class="h-64 mt-8 mb-8 bg-gradient-to-r from-gray-200 via-blue-100 to-gray-200">
<p class="text-center text-black font-serif py-8 text-3xl"><i>Create rich learning experiences with the help of vedio lectures,quizzes,coding excercises, Assigments Etc..</i></p>
        @if(session('success'))
            <div class="alert alert-success">
                <strong>{{session('success')}}</strong>
            </div>
        @endif
        <div class="ml-64">
        <a class="ml-64 px-16 py-6 bg-blue-700 hover:bg-blue-800 text-gray-400 rounded-full text-xl " href="{{ route('formfile')  }}" >Upload File</a>
        </div>
        
        
</div>
<h1 class=" mb-4 text-2xl text-start text-black font-servis">Recently Uploaded</h1>
       
             @foreach($files as $file)
                 
                      <video width="1000" height="400"class="w-full px-2 mb-4" controls> 
                      <source src="{{  Storage::url($file->path)}}" type="video/mp4"  alt="Avatar">
                      </video>
                        
                 
             @endforeach
        
</div>
<!--footer -->
<div class="h-32 bg-gradient-to-r from-gray-200 via-gray-200 to-gray-200">
<p class="text-center text-gray-500 py-16 text-xs">
    &copy;2020 Nav Academy. All rights reserved.
  </p>
</div>


</body>
</html>
