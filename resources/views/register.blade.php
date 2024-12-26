@extends('templates.main')

@section('title')
    <title>Register New Account</title>
@endsection


@section('container')
<div class = "flex h-[calc(100vh-144px)]">
    <div class="w-full max-w-sm my-auto mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="{{route('register.store')}}" method = "POST">
            <h5 class="text-xl font-bold text-gray-900 dark:text-white">Register A New Account</h5>
            @csrf
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="John Doe" />
                @error('username')
                    <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400 mt-2">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" />
                @error('email')
                    <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400 mt-2">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                @error('password')
                    <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400 mt-2">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="phone_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input type="text" name="phone_num" id="phone_num" placeholder = "08******" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                @error('phone_num')
                    <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400 mt-2">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create New Account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Already have an account? <a href="{{route('login')}}" class="text-blue-700 hover:underline dark:text-blue-500">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
