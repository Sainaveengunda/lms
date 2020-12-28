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


<!-- Background Image -->
<div style="background-image:url('/images/learning.jpg'); width:1355px; height:400px"
        class="bg-cover bg-center mx-auto py-20 bg-opacity-25 shadow-lg">
    <div class="w-1/3 ml-12 p-6 shadow-lg">
        <h1 class="text-4xl text-white font-bold">Grow Your Skills</h1>
        <p class="text-2xl text-white">Learn in-demand skills taught by real-world professionals.</p>
        
    </div>


</div>
<hr>

<!--Quotes-->
<div class="h-32 mt-8 mb-8 bg-gradient-to-r from-blue-200 via-blue-200 to-blue-200">
<p class="text-center text-black font-serif py-8 text-3xl"><i>"In order to create an engaging learning experience, the role of instructor is optional, but the role of learner is essential."</i></p>

</div>

<!-- Cards--->
<div class="flex flex-col sm:flex-row sm:-mx-2">
                    <div class="mt-4 ml-8 sm:w-1/3">
                        <div class="bg-gray-200 h-full p-8 border-b-4 border-blue-500 rounded-lg flex flex-col items-center sm:mx-2 sm:p-3 md:p-8">
                            <div class="bg-gray-200 text-indigo-700 w-10 rounded-full p-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 10L19.5528 7.72361C20.2177 7.39116 21 7.87465 21 8.61803V15.382C21 16.1253 20.2177 16.6088 19.5528 16.2764L15 14M5 18H13C14.1046 18 15 17.1046 15 16V8C15 6.89543 14.1046 6 13 6H5C3.89543 6 3 6.89543 3 8V16C3 17.1046 3.89543 18 5 18Z" stroke="#374151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </div>
                            <div class="mt-4 font-bold">Unlimited Access</div>
                            <div class="text-center mt-2 text-gray-600 text-sm">Choose what you’d like to learn from our extensive subscription library</div>
                        </div>
                    </div>
                    
                    <div class="mt-4 sm:w-1/3">
                        <div class="bg-gray-200 h-full p-8 border-b-4 border-blue-500 rounded-lg flex flex-col items-center sm:mx-2 sm:p-3 md:p-8">
                            <div class="bg-gray-200 text-indigo-700 w-10 rounded-full p-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.8284 14.8284C13.2663 16.3905 10.7337 16.3905 9.17157 14.8284M9 10H9.01M15 10H15.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </div>
                            <div class="mt-4 font-bold">Expert Instructors</div>
                            <div class="text-center mt-2 text-gray-600 text-sm">Learn from industry experts who are passionate about teaching</div>
                        </div>
                    </div>
                    
                    <div class="mt-4 mr-8 sm:w-1/3">
                        <div class="bg-gray-200 h-full p-8 border-b-4 border-blue-500 rounded-lg flex flex-col items-center sm:mx-2 sm:p-3 md:p-8">
                            <div class="bg-grey-500 text-indigo-700 w-10 rounded-full p-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M12 8V12L15 15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="mt-4 font-bold">On your schedule</div>
                            <div class="text-center mt-2 text-gray-600 text-sm">Switch between your computer or mobile device.</div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<br>

<!-- Courses -->
<h1 class="text-center text-black text-4xl"> Categories </h1>
<p class="text-center text-blak text-lg"><i></i></p>
<hr>
<div class="flex flex-col justify-between  items-center sm:flex-row sm:-mx-2">
        <!--first one -->
        <div class="w-1/4 m-4 ml-8 rounded overflow-hidden shadow-lg">
            <img class="width:1200px height:600px" src="/images/Introtoprogramming.jpg" alt="image">
        <div class="px-6 py-4">
        <a href="/categories" class="font-bold text-xl mb-2">Software and IT</a>
           
        </div>
        </div>
        <!--second one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="width:1200px height:600px" src="/images/card4.jpg"  alt="image">
            <div class="px-6 py-4">
            <a href="/business" class="font-bold text-xl mb-2">Business</a>
            </div>
        </div>
        <!--third one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/Introtoprogramming.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <a href="/marketing" class="font-bold text-xl mb-2">Marketing</a>
        </div>
        </div>
 <!--4th one one-->
 <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="width:1200px height:600px" src="/images/card4.jpg"  alt="image">
            <div class="px-6 py-4">
            <a href="/health" class="font-bold text-xl mb-2">Health & Fitness</a>
            </div>
        </div>
</div>

<div class="flex flex-col justify-between  items-center sm:flex-row sm:-mx-2">
        <!--first one -->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="width:1200px height:600px" src="/images/card4.jpg"  alt="image">
            <div class="px-6 py-4">
            <a href="/photo" class="font-bold text-xl mb-2">Photography</a>
            </div>
        </div>
        
</div>


<!--quotes2 -->
<div class="h-32 mt-8 mb-8 bg-gradient-to-r from-pink-200 via-pink-200 to-pink-200">
<p class="text-center text-black font-serif py-8 text-3xl"><i>"We need to bring learning to people instead of people to learning." - Elliot Masie</i></p>

</div>

<hr>
<!-- Backgroung image -->
<div class=" flex content-center flex-col sm:flex-row sm:-mx-2 h-auto bg-gradient-to-r from-blue-100 via-blue-200 to-blue-300 bg-opacity-25">
    <div class="mt-4 sm:w-1/3">
        <div class="bg-opacity-0" style="background-image:url('/images/boy.jpg'); width:450px; height:340px"> </div>
    </div class="mt-4 sm:w-2/3 flex content-center" >
        <div>
         <h1 class="text-center text-gray-800 font-bold text-3xl px-64">With RockED,You Can</h1>
            <ul class="text-center text-lg">
                    <li class="mb-5 mt-3 text-center">Earn a certificate when you complete a course</li>
                    <li class="mb-6 text-center">Receive course recommendations tailored to you</li>
                    <li class="mb-6 text-center">Assignments and Quizzes while you Learn</li>
                    <li class="mb-6 text-center">View courses anytime on your computer or phone</li>
                    <li class="text-center">Cancel anytime, and the courses are free</li>
            </ul> 
        </div>
     </div>   
</div>


<!-- Popular Tools-->
<h1 class="text-center text-black text-4xl"> Popular Tools</h1>
<p class="text-center text-blak text-lg"><i>Dive deeper into training on popular software applications.</i></p>
<hr class="bg-orange-900">
<div class="flex flex-col justify-between  items-center sm:flex-row sm:-mx-2">
        <!--first one -->
        <div class="w-1/4 m-4 ml-8 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/linkedin.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Linked In</div>
            <p class="text-gray-700 text-base">
                
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 32m</span>
        </div>
        </div>
        <!--second one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/google.png" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Google Apps</div>
            <p class="text-gray-700 text-base">
                
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 32m</span>
        </div>
        </div>
        <!--third one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/Adobe.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Adobe</div>
            <p class="text-gray-700 text-base">
                
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 32m</span>
        </div>
        </div>
 <!--4th one one-->
 <div class="w-1/4 m-4  rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/github.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">GitHub</div>
            <p class="text-gray-700 text-base">
                
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 32m</span>
        </div>
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