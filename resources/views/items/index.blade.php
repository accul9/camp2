@extends('layouts.app')
{{-- ↑テンプレを読み込む --}}


@section('content')
    {{-- ここから編集して --}}
    <div class="container w-full px-5 py-24 mx-auto mt-5">
        {{-- 上半部分 --}}
        <div class="flex flex-wrap w-full mb-20">
            <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
                <h1 class="mb-2 text-2xl font-bold text-gray-900 sm:text-3xl title-font">
                    個別商品一覧</h1>
                <div class="w-40 h-1 bg-green-500 rounded"></div>
            </div>
            <p class="w-full leading-relaxed text-gray-500 lg:w-1/2">
                こだわりの商品を取り揃えております。自分の好みに合った商品を見つけてください。
            </p>
        </div>
        {{-- 下半部分 --}}
        <div class="flex flex-row flex-wrap p-4 -m-4">
            @foreach ($items as $item)
                <div class="p-4 xl:w-1/4 md:w-1/3">
                    <div class="p-10 rounded-lg shadow-lg bg-gray-50">
                        <img class="object-cover object-center w-[200px] h-[200px] rounded-t-lg"
                            src="{{ asset($item->item_image) }}" alt="content">
                        <div class="pt-4 pb-8 rounded-b-lg bg-grey-50">
                            <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">{{ $item->item_name }}</h2>
                            <a href="{{ route('items.show', $item) }}">
                                <h3 class="text-xs font-medium tracking-widest text-green-500 title-font">詳細を見る</h3>
                            </a>
                            {{-- <p class="text-base leading-relaxed">{{ $set->set_name }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- ここまで編集して --}}
@endsection
