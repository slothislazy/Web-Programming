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
        <a href="{{route('game.create')}}" class = "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 no-underline flex flex-row gap-2 items-center max-w-fit mt-5">
            Add New Game
        </a>
        @foreach ($items as $item)
            <div class = " w-full flex mb-5 mt-5 items-center dark:bg-gray-800 dark:border-gray-900 justify-between pe-10 gap-5">
                <img src="{{asset('storage/thumbnails/'.$item->image)}}" alt="" class = "w-1/5">
                <div class = "flex flex-row items-center w-3/4">
                    <h1 class = "text-xl font-bold dark:text-white">{{$item->title}}</h1>
                </div>
                <div class = "flex flex-row gap-5">
                    <a href="{{route('game.edit', ['game' => $item->id])}}" class = "font-medium text-yellow-600 dark:text-yellow-400 hover:underline">Edit</a>
                    <form action = "{{route('game.delete', ['game_id' => $item->id])}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class = "font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif

    @if ($tab == 'categories')
        <a href="{{route('category.create')}}" class = "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 no-underline flex flex-row gap-2 items-center max-w-fit mt-5">
            Add New Category
        </a>
        @foreach ($items as $item)
            <div class = " w-full h-16 flex mb-5 mt-5 items-center dark:bg-gray-800 dark:border-gray-900 justify-between px-10 gap-5 rounded-lg">
                <div class = "flex flex-row items-center w-3/4">
                    <h1 class = "text-xl font-bold dark:text-white">{{$item->name}}</h1>
                </div>
                <div class = "flex flex-row gap-5">
                    <a href="{{route('category.edit', ['category' => $item->id])}}" class = "font-medium text-yellow-600 dark:text-yellow-400 hover:underline">Edit</a>
                    <form action = "{{route('category.delete', ['category_id' => $item->id])}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class = "font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif

@endsection
