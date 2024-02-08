@extends('layouts.app')
{{-- ↑テンプレを読み込む --}}

@section('content')
    <div class="flex flex-row w-full mt-20 p-[80px]">
        {{-- 左半分 --}}
        <div class="flex flex-row flex-wrap w-1/2 mt-2 border-4 border-blue-500">
            <div class="w-full text-center">
                <h1
                    class="mb-2 text-2xl font-bold text-gray-900 underline sm:text-3xl title-font underline-offset-8 decoration-green-500">
                    {{ $recipe->recipe_name }}</h1>
            </div>

            <div class="grid p-8 mx-auto mt-10 rounded-lg shadow-lg justify-items-center bg-gray-50">
                <img class="object-cover w-[640px] h-[480px] mb-6 rounded-t-lg" src="{{ asset($recipe->recipe_image) }}"
                    alt="content">
            </div>
        </div>

        {{-- 右半分 --}}
        <div class="flex flex-col w-1/2 mx-auto p-[100px]">

            <div>
                <h2>材料：</h2>
                {!! $recipe->recipe_ingredients !!}
            </div>

            <div class="mt-10">
                <h2>作り方：</h2>
                {!! $recipe->recipe_description !!}
            </div>

            {{-- レシピ一覧に戻るボタン --}}
            <a href="">
                <button
                    class="flex w-[210px] justify-center px-8 py-2 my-10 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600">レシピ一覧に戻る</button>
            </a>
        </div>
    </div>
@endsection
