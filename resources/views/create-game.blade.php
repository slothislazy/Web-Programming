@extends('templates.main')

@section('title')
    <title>Create Game</title>
@endsection

@section('container')
    <form class="max-w-sm mx-auto" method = "POST" action = "{{route("game.store")}}" enctype="multipart/form-data">
    @csrf
        <h1 class = "text-3xl font-bold dark:text-white mb-5">Create Game</h1>
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Game Title</label>
            <input type="text" id="title" name = "title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
        </div>
        <!-- error message -->
        @error('title')
            <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400">{{$message}}</div>
        @enderror
        <div class="mb-5">
            <label for="developer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Developer</label>
            <input type="text" id="developer" name = "developer" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
        </div>
        @error('developer')
            <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400">{{$message}}</div>
        @enderror
        <div class = "mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Game Category</label>
            <select id="category_id" name = "category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option disabled selected value>Choose a category</option>
                @foreach ($categories as $category)
                    <option value = {{$category->id}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        @error('category_id')
            <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400">{{$message}}</div>
        @enderror
        <!-- <div class="mb-5"> -->
        <!--     <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label> -->
        <!--     <input type="number" id="price" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  /> -->
        <!-- </div> -->
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
        <div class="flex mb-5">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
            <h1>Rp.</h1>
            </span>
            <input type="number" id="price" name = "price" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        </div>
        @error('price')
            <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400">{{$message}}</div>
        @enderror
        <div class = "mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Game Image</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="image" name = "image" type="file">
        </div>
        @error('image')
            <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400">{{$message}}</div>
        @enderror
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="datepicker-autohide">Select Release Date</label>
        <div class="relative max-w-sm mb-5">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input id="datepicker-autohide" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name = "release_date">
        </div>
        @error('release_date')
            <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400">{{$message}}</div>
        @enderror
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Game</button>
    </form>
@endsection
