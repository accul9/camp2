@extends('layouts.app')

@section('content')
    <div class="container items-start w-full px-5 py-24 mx-auto mt-5">
        <x-generic-h1>
            プロフィール編集
        </x-generic-h1>
        <form method="POST" action="{{ route('profile.update') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" style="max-width: 500px;">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">姓<span class="text-red-300 text-xs ml-3">＊必須</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="last_name" value="{{ Auth::user()->last_name }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">名<span class="text-red-300 text-xs ml-3">＊必須</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="first_name" value="{{ Auth::user()->first_name }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">メール<span class="text-red-300 text-xs ml-3">＊必須</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" value="{{ Auth::user()->email }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user_postcode">郵便番号<span class="text-red-300 text-xs ml-3">＊必須</span><span class="text-xs text-red-300 ml-3">ハイフン不要</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="user_postcode" value="{{ Auth::user()->user_postcode }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user_address">住所<span class="text-red-300 text-xs ml-3">＊必須</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="user_address" value="{{ Auth::user()->user_address }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user_phone">電話番号<span class="text-red-300 text-xs ml-3">＊必須</span></label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="user_phone" value="{{ Auth::user()->user_phone }}" required>
            </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">更新する</button>

        </form>
    </div>
@endsection