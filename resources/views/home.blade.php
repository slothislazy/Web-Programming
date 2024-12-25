@extends('templates.main')

@section('title')
    <title>Homepage</title>
@endsection

@section('container')
    <div class = "flex flex-col gap-20">
        <div id = "featured-games">
            <h1 class="text-3xl font-bold dark:text-white underline">
                Featured Games
            </h1>
            <div class = "flex gap-10 overflow-auto mt-10">
                @foreach ($games as $game)
                    @include('components.game-card')
                @endforeach
            </div>
        </div>
        <div id = "cateogires">
            <h1 class="text-3xl font-bold dark:text-white underline">
                Categories
            </h1>
            <div class = "grid grid-cols-4 mt-10">
                @foreach ($categories as $category)
                    <a href="{{route("category.show", ["category" => $category->id])}}" class = "me-2"><button type="button" class="h-20 text-white text-xl bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-5 py-2.5 text-center me-2 mb-2 w-full">{{$category->name}}</button></a>
                    <!-- <button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Green to Blue</button> -->
                    <!-- <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Purple to Pink</button> -->
                    <!-- <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Pink to Orange</button> -->
                    <!-- <button type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Teal to Lime</button> -->
                    <!-- <button type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Red to Yellow</button> -->
                @endforeach
            </div>
        </div>
        <div id = "all-games">
        <!-- TODO -->
        </div>
    </div>
@endsection
