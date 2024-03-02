@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-5 py-24 mt-5">
        {{-- 上半部分 --}}
        <div class="text-center">
            <h1 class="text-3xl  mt-40 font-bold">お支払いが完了しました！</h1>
            <p class="text-3xl mt-10 font-bold">ご購入いただき、ありがとうございました！</p>
            <p class="text-2xl mt-20 flex justify-center">
                <a class="w-[210px] justify-center mr-10 px-8 py-2 my-10 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600" href="{{ route('index') }}" role="button">ホームへ</a>                
                <a class="w-[210px] justify-center mr-10 px-8 py-2 my-10 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600" href="{{ route('items.index') }}" role="button">商品一覧へ</a>
                <a class="w-[210px] justify-center mr-10 px-8 py-2 my-10 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600" href="{{ route('sets.index') }}" role="button">セット一覧へ</a>
                <a class="w-[210px] justify-center mr-10 px-8 py-2 my-10 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600" href="{{ route('profile.show') }}" role="button">マイページへ</a>
            </p>
        </div>
    </div>
@endsection