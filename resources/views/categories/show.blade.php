@extends('layouts.app')

@section('content')
    <div class="container w-full px-5 py-24 mx-auto mt-5">
        {{-- 上半部分 --}}
        <div class="flex flex-wrap w-full pl-4 mb-20">
            <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
                <x-generic-h1>Category: {{ $category->name }}</x-generic-h1>
            </div>
        </div>
        {{-- 下半部分 --}}
        <div class="flex flex-row w-full">
            <div class="flex flex-col w-1/4 p-8 m-4 rounded-xl bg-gray-50">
                <ul>
                    @foreach ($categories as $category)
                        <a href="{{ route('categories.show', $category->category_id) }}">
                            <li class="p-2 mb-4 text-gray-900 hover:bg-[#eff5d7] hover:text-xl rounded-lg">
                                {{ $category->name }}
                            </li>
                        </a>
                    @endforeach
                </ul>
                {{-- <a href="{{ route('categories.show', ['category_id' => 1]) }}">Test Category Link</a> --}}

            </div>
            <div class="flex flex-row flex-wrap w-3/4 p-4 -m-4">

            </div>
        </div>

    </div>
@endsection
```
