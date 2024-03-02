@extends('layouts.app')

@section('content')
    <section class="relative pt-10 text-gray-600 body-font ">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col w-full mb-12 text-center">
                <h1 class="my-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">ご購入ありがとうございました</h1>
            </div>

            <div class="mx-auto lg:w-1/2 md:w-2/3">
                <div class="flex flex-wrap -m-2">
                    <div class="w-full p-2">
                        <div class="relative">
                            <p class="px-6 pt-6 rounded bg-slate-200">支払いがキャンセルされました。</p>
                            </p>
                            <p class="p-6 rounded bg-slate-200">何かご不明な点がございましたら、お気軽にお問い合わせください。</p>
                            <div class="flex justify-center mt-10">
                                <a href="{{ url('/') }}"><button
                                        class="flex px-8 py-2 mx-2 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600">ホームに戻る</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection