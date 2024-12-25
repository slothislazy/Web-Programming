@extends('templates.main')

@section('title')
    <title>{{$game->title}}</title>
@endsection


@section('container')
    <div class = "mt-14">
        <h1 class = "text-3xl font-bold dark:text-white underline">{{$game->title}}</h1>
        <div class = "flex flex-row mt-10 gap-9">
            <img src="{{asset('storage/thumbnails/'.$game->image)}}" alt="{{$game->image}}" class = "w-full md:w-1/2">
            <div class = "dark:text-gray-300 w-1/2 bg-gray-800 p-10 rounded-md relative">
                <h5 class = "font-bold">Description</h5>
                <h5>{{$game->description ?? "(Description Not Available)"}}</h5>
                <p class = "mt-5">
                    <span class = "font-bold">Category: </span>
                    <a href="{{route('category.show', ['category' => $game->category->id])}}" class = "hover:underline">{{$game->category->name}}</a>
                </p>
                <p><span class = "font-bold">Developer: </span> {{$game->developer}}</p>
                <p><span class = "font-bold">Release Date: </span> {{$game->release_date}}</p>
                <span class = "text-3xl text-white font-bold absolute bottom-10">Price: Rp. {{$game->price}}</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-2xl px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 no-underline absolute bottom-10 right-10 flex flex-row gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    Add to cart
                </a>
            </div>
        </div>
    </div>
    <div class = "mt-16">
        <h1 class = "text-3xl font-bold dark:text-white underline">Similar Games</h1>
        <!-- TODO -->
    </div>
@endsection
