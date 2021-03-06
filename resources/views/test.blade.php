<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nav Academy</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">   
    <script src="{{ mix('js/app.js') }}" defer></script>
  
       
</head>
<body>
<!-- Header or Navbar -->

<div class="flex flex-row">
        <div class="font-serif text-black text-center bg-white m-2 mt-8">
                <el-menu-item index="1" class="text-2xl  mt-8"><h1>RockED</h1></el-menu-item>
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
            <p class="px-2 py-10 text-lg"><a href="#">Teach Here</a></p>
         </div>
         <div class="text-black text-center bg-white">
            <p class="px-2 py-10 text-lg"><a href="#">Login</a></p>
         </div>
        <div>
            <button 
            class="m-8 bg-blue-700 hover:bg-blue-800 py-2 px-4 text-gray-400 text-lg rounded-lg border-l-8 border-blue-700">
            Get Started
            </button>
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
<h1 class="text-center text-black text-4xl"> Top Courses </h1>
<p class="text-center text-blak text-lg"><i>Learn the most relevant skills with business, creative, and tech courses - dozens of courses added each week.</i></p>
<hr>
<div class="flex flex-col justify-between  items-center sm:flex-row sm:-mx-2">
        <!--first one -->
        <div class="w-1/4 m-4 ml-8 rounded overflow-hidden shadow-lg">
            <img class="width:1200px height:600px" src="/images/Introtoprogramming.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Intro To Programming</div>
            <p class="text-gray-700 text-base">
            Intro to Programming is your first step towards careers in Web and App Development, ML, Data Science, AI, and more!
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 42m</span>
        </div>
        </div>
        <!--second one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full px-2" src="/images/full-stack.png"  alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Full Stack</div>
            <p class="text-gray-700 text-base">
            Learn to design and develop powerful modern web applications that form the foundation for the apps, websites, and systems that people and businesses use every day.
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">39m</span>
        </div>
        </div>
        <!--third one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/card3.png" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Data Structures</div>
            <p class="text-gray-700 text-base">
            Get hands-on practice with over 100 data structures and algorithm exercises and technical mentor support when needed to help prepare you for interviews and on-the-job scenarios.
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 02m</span>
        </div>
        </div>
 <!--4th one one-->
 <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/card4.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Java Web Developer</div>
            <p class="text-gray-700 text-base">
            Learn enterprise scale back-end development with Java, and be prepared for the software engineering jobs.
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 32m</span>
        </div>
        </div>
</div>

<div class="flex flex-col justify-between  items-center sm:flex-row sm:-mx-2">
        <!--first one -->
        <div class="w-1/4 m-4 ml-8 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/digitalmarketing.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Digital Marketing</div>
            <p class="text-gray-700 text-base">
            Gain real-world experience running live campaigns as you learn from top experts in the field. Launch your career with a 360-degree understanding of digital marketing.
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">7h 52m</span>
        </div>
        </div>
        <!--second one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/productmanager.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Product Manager</div>
            <p class="text-gray-700 text-base">
            Envision and lead the product strategy of industry-defining products, and learn to successfully bring them to market. Influence the execution of product development.
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">5h 22m</span>
        </div>
        </div>
        <!--third one-->
        <div class="w-1/4 m-4 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/Business-Analytics-in-Stock-Market.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Businss Analytics</div>
            <p class="text-gray-700 text-base">
            Gain foundational data skills applicable to any industry. Collect and analyze data, and communicate your findings with SQL, Excel, and Tableau.</p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">1h 29m</span>
        </div>
        </div>
 <!--4th one one-->
 <div class="w-1/4 m-4  rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/images/uxDesigner.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">UX Designer</div>
            <p class="text-gray-700 text-base">
            Design impactful user experiences for products in today’s digital world. Build a portfolio that showcases your ability to transform user research to interactive designs.
             </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block  px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">8h 32m</span>
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
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