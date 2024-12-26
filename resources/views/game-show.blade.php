@extends('templates.main')

@section('title')
    <title>{{$game->title}}</title>
@endsection


@section('container')
    <div class = "mt-5">
        <h1 class = "text-3xl font-bold dark:text-white underline">{{$game->title}}</h1>
        <div class = "flex flex-row mt-10 gap-9">
            <img src="{{asset('storage/thumbnails/'.$game->image)}}" alt="{{$game->image}}" class = " md:w-1/2">
            <div class = "dark:text-gray-300 w-1/2 bg-gray-800 p-10 rounded-md flex-col flex justify-between">
                <div>
                    <h5 class = "font-bold">Description</h5>
                    <h5>{{$game->description ?? "(Description Not Available)"}}</h5>
                    <p class = "mt-5">
                        <span class = "font-bold">Category: </span>
                        <a href="{{route('category.show', ['category' => $game->category->id])}}" class = "hover:underline">{{$game->category->name}}</a>
                    </p>
                    <p><span class = "font-bold">Developer: </span> {{$game->developer}}</p>
                    <p><span class = "font-bold">Release Date: </span> {{$game->release_date}}</p>
                </div>
                <div class = "flex flex-row justify-between bottom-10 items-center">
                    <span class = "text-3xl h-fit text-white font-bold bottom-10">Price: Rp. {{$game->price}}</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-2xl px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 no-underline flex flex-row gap-2 items-center max-w-fit">
                        @include('components.icons.cart')
                        Add to cart
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class = "mt-16">
        <h1 class = "text-3xl font-bold dark:text-white underline mb-10">Similar Games</h1>
        <div class = "flex overflow-auto gap-5">
            @foreach ($similar_games as $similar_game)
                    <a href="{{route('game.show', ['game' => $similar_game->id])}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 flex-none">
                        <img class="object-cover w-full rounded-t-lg md:w-2/3 md:h-full md:rounded-none md:rounded-s-lg" src="{{asset('storage/thumbnails/'.$similar_game->image)}}" alt="{{$similar_game->title}} Image">
                        <div class="flex flex-col justify-between p-4 leading-normal md:w-full">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$similar_game->title}}</h5>
                            <p class="font-normal text-sm text-gray-700 dark:text-gray-400"><span class = "font-bold">Category: </span>{{$similar_game->category->name}}</p>
                            <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400"><span class = "font-bold">Developer: </span>{{$similar_game->developer}}</p>
                            <div class="flex items-center mt-2 mb-2">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                </div>
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                            </div>
                        </div>
                    </a>
            @endforeach
        </div>
    </div>
@endsection
