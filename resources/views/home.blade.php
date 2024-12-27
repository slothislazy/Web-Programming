@extends('templates.main')

@section('title')
    <title>Homepage</title>
@endsection

@section('container')
        <h1 class="text-3xl font-bold dark:text-white underline">
            Featured Games
        </h1>
        <div class = "flex gap-10 overflow-auto mt-10 mb-16">
            @foreach ($games as $game)
                @include('components.game-card')
            @endforeach
        </div>
        <h1 class="text-3xl font-bold dark:text-white underline">
            Categories
        </h1>
        <div class = "grid grid-cols-4 mt-10 mb-16">
            @foreach ($categories as $category)
                <a href="{{route("category.show", ["category" => $category->id])}}" class = "me-2"><button type="button" class="h-20 text-white text-xl bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-5 py-2.5 text-center me-2 mb-2 w-full">{{$category->name}}</button></a>
                <!-- <button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Green to Blue</button> -->
                <!-- <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Purple to Pink</button> -->
                <!-- <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Pink to Orange</button> -->
                <!-- <button type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Teal to Lime</button> -->
                <!-- <button type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Red to Yellow</button> -->
            @endforeach
        </div>
        <h1 class="text-3xl font-bold dark:text-white underline">
            All Games
        </h1>
        <div id = "all-games" class = "grid md:grid-cols-3 gap-5 mt-10 mb-16">
            <!-- TODO -->
            @foreach ($games as $game)
                <a href="{{route('game.show', ['game' => $game->id])}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg md:w-2/3 md:h-full md:rounded-none md:rounded-s-lg" src="{{asset('storage/thumbnails/'.$game->image)}}" alt="{{$game->title}} Image">
                    <div class="flex flex-col justify-between p-4 leading-normal md:w-full">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$game->title}}</h5>
                        <p class="font-normal text-sm text-gray-700 dark:text-gray-400"><span class = "font-bold">Category: </span>{{$game->category->name}}</p>
                        <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400"><span class = "font-bold">Developer: </span>{{$game->developer}}</p>
                        <div class="flex items-center mt-2 mb-2">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $game->average_rating())
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{$game->average_rating()}}.0</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
@endsection
