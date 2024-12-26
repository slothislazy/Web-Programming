@extends('templates.main')

@section('title')
    <title>My Cart</title>
@endsection


@section('container')
    <h1 class="text-3xl font-bold dark:text-white underline mb-10">
        My Cart
    </h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-16 py-3 w-1/5">
                        <span class="sr-only">Image</span>
                    </th>
                    <th scope="col" class="px-6 py-3 w-1/4">
                        Game
                    </th>
                    <th scope="col" class="px-6 py-3 w-1/3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart->items as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4">
                        <img src="{{asset('storage/thumbnails/'.$item->game->image)}}" class="max-w-32 md:max-w-64 w-full object-cover max-h-full" alt="">
                    </td>
                    <td class="px-6 py-4 font-semibold md:text-xl text-gray-900 dark:text-white">
                        {{$item->game->title}}
                    </td>
                    <td class="px-6 py-4 font-semibold md:text-xl text-gray-900 dark:text-white">
                        Rp. {{$item->game->price}}
                    </td>
                    <td class="px-6 py-4">
                    <form action = "{{route('cart.remove', $item->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class = "font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if (sizeof($cart->items) != 0)
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <h1 class="text-5xl font-bold dark:text-white mb-10">
            Total: Rp. {{$total}}
        </h1>
    @endif

@endsection
