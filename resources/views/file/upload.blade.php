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
<!--uploading courses-->
<h1 class=" mb-4 text-2xl text-center text-black font-servis">Course Landing page</h1>
<!-- Upload -->

<h1 class=" mb-4 text-lg text-center text-black font-servis">Upload Image</h1>
        <div class="mt-4 mb-2 flex flex-row justify-start items-stretch">
        <div>
        <img class="w-64" src="/images/uploadimage.png" alt="Sunset in the mountains">
        </div>
        <div>
                 <form action="{{ route('uploadfile') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group ml-64">
                   <input class="bg-blue-700 border-full h-8 hover:blue-800" type="file" name="file" placeholder="Upload File">   
                  </div>
                  <br>


        <div class="ml-64">
         <button type="submit" class="m-4 bg-indigo-200 border-b-4 border-indigo-800 px-3 py-1">Upload</button>
         
         </div>  
         
        </form>
        </div>
 </div>
 <h1 class=" mb-4 text-lg text-center text-black font-servis">Upload Vedio</h1>
 <div class="mt-4 mb-2 flex flex-row justify-start items-stretch">
        <div>
        <img class="w-64" src="/images/uploadimage.png" alt="Sunset in the mountains">
        </div>
        <div>
                 <form action="{{ route('uploadfile') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group ml-64">
                   <input class="bg-blue-700 border-full h-8 hover:blue-800" type="file" name="file" placeholder="Upload File">   
                  </div>
                  <br>


        <div class="ml-64">
         <button type="submit" class="m-4 bg-indigo-200 border-b-4 border-indigo-800 px-3 py-1">Upload</button>
         
         </div>  
         
        </form>
        </div>
 </div>
 <div class="text-center mb-8">       
<a href="{{ route('courseupload') }}" class="m-4 mt-4 mb-4 border-2 text-center border-red-500 text-red-500 rounded px-3 py-1">Done</a>  
</div>
</div>
</body>

</html>