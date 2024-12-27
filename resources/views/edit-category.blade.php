@extends('templates.main')

@section('title')
    <title>Edit Category</title>
@endsection

@section('container')
    <form class="max-w-sm mx-auto" method = "POST" action = "{{route('category.update', ['category' => $category->id])}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
        <h1 class = "text-3xl font-bold dark:text-white mb-5">Edit Category</h1>
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
            <input type="text" id="name" name = "name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  value = "{{$category->name}}"/>
        </div>
        <!-- error message -->
        @error('name')
            <div class = "mb-4 text-sm text-red-800 rounded-lg dark:text-red-400">{{$message}}</div>
        @enderror
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Category</button>
    </form>
@endsection
