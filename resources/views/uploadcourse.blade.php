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

<!-- forms -->

<form action="{{ url('/uploadcourses') }}" method="post" >
<div class="mt-4 mr-16 ml-16 max-w-full border border-gray-700  h-auto rounded items-center overflow-hidden shadow-lg">
        <label class="block mt-8 h-16" for="course_name">
             <span class="text-gray-700 h-12 font-serif">Course Name</span>
             <input id="course_name" class="form-input mt-1 h-16 border border-gray-300 text-gray-700 block w-full" placeholder="Insert Your Course Title">            
        </label>

        <label class="block mt-10 h-16 mb-4" for="course_subtitle">
             <span class="text-gray-700 h-12 font-serif">Course Subtitle</span>
             <input id="course_subtitle" class="form-input mt-1 h-16 border border-gray-300 text-gray-700 block w-full" placeholder="Insert Your Course SubTitle">            
        </label>

        <label class="block mt-10" for="course_description">
            <span class="text-gray-700 font-serif">Course Description</span>
            <textarea id="course_description" class="form-textarea h-32 mt-1 border text-gray-700 block w-full"  rows="3" placeholder="Enter your course description."></textarea>
        </label>

        <div class="flex flex-wrap -mx-3 mb-2 mt-8">        
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="course_language">
                  Basic Info
             </label>
         <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="course_language">
                <option>English(US)</option>
                <option>Hindi</option>
                 <option>Telugu</option>
                 <option>English(UK)</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="course_difficulty">
        Select Level
      </label>
      <div class="relative">
        <select id="course_difficulty" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option>Beginner Level</option>
          <option>Intermediate Level</option>
          <option>Expert Level</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="course_category">
        Select Category
      </label>
      <div class="relative">
        <select id="course_category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option>Software and IT</option>
          <option>Business</option>
          <option>Health and Fitness</option>
          <option>Marketing</option>
          <option>Photography</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
</div>
        <label class="block mt-10 h-16 mb-4" for="course_image">
             <span class="text-gray-700 h-12 font-serif">Upload Course Image</span>
             <input id="course_subtitle" class="form-input mt-1 h-16 border border-gray-300 text-gray-700 block w-full" placeholder="Insert Your Course SubTitle">            
        </label>

</div>

</form>

</body>
</html>