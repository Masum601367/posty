@extends('layouts.app')

@section('contents')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            {{ session('status') }}
        </div>
        @endif

        <form class="w-full max-w-sm" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">Email</label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('email') border-red-500 @enderror" id="inline-email" type="email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            @error('email')
            <div>
                <p class="text-red-500 text-sm text-center -mt-5 ml-8">{{ $message }}</p>
            </div>
            @enderror

            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">Password</label>
              </div>
              <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('password') border-red-500 @enderror" id="inline-password" type="password" placeholder="Type your password.." name="password">
              </div>
            </div>
            @error('password')
            <div>
                <p class="text-red-500 text-sm text-center -mt-5 ml-12">{{ $message }}</p>
            </div>
            @enderror

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>

            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Login</button>
                </div>
            </div>
          </form>
    </div>
</div>
@endsection
