<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nav Academy</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">   
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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


         <form  method="GET" action="{{ url('/search') }}">
         <div class="flex">
         <div>
         <input type="text" class="border border-4  border-gray-200 bg-gray-200 hover:gray:300 px-64 py-3 mt-8" size="15" name="query" placeholder="Search Here!!">
         </div>
         <div class="mt-8">
         <button class="bg-gray-500  hover:bg-gray-600 text-xl text-white font-serif  py-2 px-2">
         <svg width="27" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
             </svg>
         </button> 
         </div>
         </div>
         </form> 

         
         <div class="text-black text-center bg-white px-2">
            <p class=" mt-4 px-2 py-8 text-lg"><a href="{{ url('/teach') }}">Teach Here</a></p>
         </div>
         
         <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
         <div class="mt-12" >
         <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          <span>{{Auth::user()->name}}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/profile/10">Profile</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/mycourses/enroll">My Courses</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/profile/10/edit">Edit Profile</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Settings</a>
          </div>
        </div>
      </div>  
      </div>  
         <div class="m-2 mt-12 ml-12">
         <form action="/logout" method="POST">
             @csrf
                <input type="submit" value="Logout" class="bg-blue-700 hover:red-600 text-xl text-white font-serif rounded">
         </form>
         </div>
</div>
<hr class="border-full border-yellow-600">

<div>
<div class="h-auto flex mt-8 mb-8 bg-gradient-to-r from-blue-200 via-blue-200 to-blue-200">
<div class="w-1/2">

<p class="text-left ml-12 mt-4 text-black font-serif font-bold  text-4xl">{{ $article->course_title }}</p>
<p class="text-left ml-12 mt-4 text-black font-serif  text-xl"><i>{{ $article->course_subtitle }}</i></p>
<div class="flex mt-6">
<div>
    <h1 class="ml-12 mt-40  text-red-700 font-bold">Language: {{ $article->course_language}}</h1>
</div>
<div>
    <h1 class="ml-12 mt-40 text-red-700 font-bold">Difficulty: {{ $article->course_difficulty}}</h1>
</div>

</div>
<div>


</div>
</div>
<div class="w-1/2">
<img class=" ml-12" src="{{  Storage::url($article->course_image)}}" type="jpg/png/jpeg" alt="Sorry Not displayed" style="height: 340px; width: 550px">
</div>
</div>

<div class="mt-4">
<h1 class="text-left ml-12 text-black font-bold text-3xl">Description</h1>
<p class="text-left ml-12 mt-4 text-black font-serif  text-xl">{{ $article->course_description }}</p>

</div>
<div class="mt-4">
<h1 class="text-left ml-12 mb-4 text-black font-bold text-3xl">Course Video</h1>
<video style="height: 400px; width: 800px" class="w-full ml-64  px-2 mb-4" controls> 
        <source src="{{  Storage::url($article->course_video)}}" type="video/mp4"  alt="Avatar" >
 </video>
</div>
<div class="flex mb-2 mr-64 ml-64 items-center justify-between">
    <div>
      <span class="text-xs font-semibold text-lg inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-gray-300">
        Course progress
      </span>
    </div>
    <div class="text-right">
      <span class="text-xs font-semibold inline-block text-pink-600">
        
      </span>
    </div>
    </div>
<div>
<div class="relative pt-1 ml-64 mr-64" style="width:50">
  <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-indigo-200">
    <div style="width:30%" 
    
    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
  </div>
</div>


<!--footer -->
<div class="h-32 bg-gradient-to-r from-gray-200 via-gray-200 to-gray-200">
<p class="text-center text-gray-500 py-16 text-xs">
    &copy;2020 Nav Academy. All rights reserved.
  </p>
</div>
</body>

</html>