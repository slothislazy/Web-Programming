@extends('templates.main')

@section('title')
    <title>Admin Dashboard</title>
@endsection

@section('container')
    <h1 class = "dark:text-white text-3xl mb-10 font-bold">Admin Dashboard</h1>
    <div class = "w-full flex flex-row gap-10">
        <a href="{{route('admin.dashboard', ['tab' => 'games'])}}" class = "active:text-blue-800 dark:text-white text-xl hover:text-blue-400 hover:underline {{$tab == 'games' ? 'underline active' : ''}}">All Games</a>
        <a href="{{route('admin.dashboard', ['tab' => 'categories'])}}" class = "dark:text-white text-xl hover:text-blue-400 hover:underline {{$tab == 'categories' ? 'underline active' : ''}}">All Categories</a>
    </div>
    <hr class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700">

    @if ($tab == 'games')
        @foreach ($items as $item)
            <div class = " w-full h-fit flex mb-5 mt-5 items-center dark:bg-gray-800 dark:border-gray-900 gap-10">
                <img src="{{asset('storage/thumbnails/'.$item->image)}}" alt="" class = "w-1/5">
                <h1 class = "text-3xl font-bold dark:text-white">{{$item->title}}</h1>
            </div>
        @endforeach
    @endif
@endsection
