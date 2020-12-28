@extends('layouts.app')


@section('content')
                
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="#" class="bg-white text-black font-serief font-bold text-xl p-4">RockED</a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Welcome Back</p>
               
                    <form method="POST" action="{{ route('login') }}" class="flex flex-col pt-3 md:pt-8">
                        @csrf

                        <div class="flex flex-col pt-4">
                            <label for="email" class="text-lg">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-lg">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                            <div>
                                <button type="submit" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                  
                    </form>
                </div>
                </div>

        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="data:image/png;base64,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">
        </div>

        <div class="text-center ml-48 ">
                <a class="small text-blue-400" href="/register">Have'nt Registerd!! Click Here</a>
        </div>
  </div>
@endsection
