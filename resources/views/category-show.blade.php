@extends('templates.main')

@section('title')
    <title>{{$category->name}}</title>
@endsection

@section('container')
    <h1 class="text-3xl font-bold dark:text-white underline">
        {{$category->name}}
    </h1>

    @foreach ($category->games as $game)
        <a href="#" class= "mt-10 w-full flex flex-col md:items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-auto md:h-64">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-96 md:ms-5 md:rounded-none" src="{{asset('storage/thumbnails/'.$game->image)}}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal md:ms-10">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$game->title}}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-100"><span class = "font-bold">Developer: </span>{{$game->developer}}</p>
                <p class="font-normal text-gray-700 dark:text-gray-400"><span class = "font-bold">Release Date: </span>{{$game->release_date}}</p>
            </div>
        </a>
    @endforeach
@endsection
