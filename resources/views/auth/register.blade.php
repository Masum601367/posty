@extends('layouts.app')

@section('contents')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form class="w-full max-w-sm" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">Full Name</label>
              </div>
              <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="name" value="{{ old('name') }}">
              </div>
            </div>
            @error('name')
            <div>
                <p class="text-red-500 text-sm text-center -mt-5 ml-8">{{ $message }}</p>
            </div>
            @enderror

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-user-name">User Name</label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-user-name" type="text" name="username"value="{{ old('username') }}">
                </div>
            </div>
            @error('username')
            <div>
                <p class="text-red-500 text-sm text-center -mt-5 ml-12">{{ $message }}</p>
            </div>
            @enderror

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">Email</label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-email" type="email" name="email" value="{{ old('email') }}">
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
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="Type your password.." name="password">
              </div>
            </div>
            @error('password')
            <div>
                <p class="text-red-500 text-sm text-center -mt-5 ml-12">{{ $message }}</p>
            </div>
            @enderror

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">Password</label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="Re-type your password.." name="password_confirmation">
                </div>
            </div>
            @error('password_confirmation')
            <div>
                <p class="text-red-500 text-sm text-center -mt-5 ml-8">{{ $message }}</p>
            </div>
            @enderror

            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Register</button>
                </div>
            </div>
          </form>
    </div>
</div>
@endsection
