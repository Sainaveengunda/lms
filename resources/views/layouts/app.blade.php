<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Welcome !!') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="flex flex-row">
        <div class="font-serif text-black text-center bg-white m-2 mt-8">
                <a href="{{ url('/')}}"class="text-2xl  mt-8"><h1>RockED</h1></a>
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
         <div class="text-black text-center bg-white">
            <p class="px-2 py-10 text-lg"><a href="{{ route('login') }}">Login</a></p>
         </div>
        <div class="mt-8 py-2">
            <a href="{{ url('/register') }}"
            class="m-8 mt-2 bg-blue-700 hover:bg-blue-800 py-2 px-4 text-gray-400 text-lg rounded-lg border-l-8 border-blue-700">
            Get Started
            </a>
        </div>
</div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- import Vue before Element -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <!-- import JavaScript -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
</body>
</html>
