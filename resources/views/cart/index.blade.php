@extends('layouts.app')

@section('content')
<div class="w-full px-5 py-24 m-5 mx-auto">
    <h2>カート一覧</h2>

    @if ($cartItems->isEmpty())
        <p>カートに商品は入っていません</p>
        {{-- セット一覧に戻るボタン --}}
        <a href="{{ route('items.index') }}">
            <x-green-button>商品一覧に戻る</x-green-button>
        </a>    
        <a href="{{ route('sets.index') }}">
            <x-green-button>セット覧に戻る</x-green-button>
        </a>
    @else
        <div class="p-6 dark:text-black">   
            @foreach ($cartItems as $cartItem)
                @if($cartItem->item)
                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-3/12">
                            画像
                            @if($cartItem->item->item_image)
                                <img src="{{ asset('storage/' . $cartItem->item->item_image) }}" alt="商品画像" class="w-20 h-20 object-cover">
                            @else
                                <img src="">
                            @endif
                        </div>
                        <div class="md:w-4/12 md:ml-2">
                            {{ $cartItem->item->item_name }}商品名
                        </div>
                        <div class="md:w-3/12 flex justify-around">
                            <div>{{ $cartItem->quantity }}個</div>
                            <div>{{ $cartItem->item->item_price }}<span class="text-sm text-gray-700">円(税込)</span></div>
                        </div>
                        <!-- Quantity change form -->
                        <form action="{{ route('cart.update', $cartItem->item_id) }}" method="PUT">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $cartItem->item_id }}">
                            <p class="my-5 text-xl text-gray-500">数量：
                                <select name="quantity" id="quantity" class="w-[100px] px-2 py-1 mt-2 border border-gray-300 rounded">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" @if($i == $cartItem->quantity) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                            </p>
                            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">更新</button>
                        </form>
                        <!-- Delete button -->
                        <form action="{{ route('cart.delete', $cartItem->item_id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="item_id" value="{{ $cartItem->item_id }}">
                            <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700"
                                onclick="return confirm('Are you sure?')">削除</button>
                        </form>
                    </div>
                @endif

                @if ($cartItem->set)
                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-3/12">
                            画像
                            @if (!empty($cartItem->set->set_image))
                                <img src="{{ asset('storage/' . $cartItem->set->set_image) }}" alt="商品画像" class="w-20 h-20 object-cover">
                            @else
                                <img src="">
                            @endif
                        </div>
                        <div class="md:w-2/12 md:ml-2">
                            {{ $cartItem->set->set_name }}商品名
                        </div>
                        <div class="md:w-4/12 flex justify-around">
                        <!-- Quantity change form -->
                        <form action="{{ route('cart.update', $cartItem->set_id) }}" method="PUT">
                            @csrf
                            
                            <input type="hidden" name="set_id" value="{{ $cartItem->set_id }}">
                                <div>{{ $cartItem->quantity }}個
                                    <select name="quantity" id="quantity" class="w-[100px] px-2 py-1 mt-2 border border-gray-300 rounded">
                                        @for ($i = -10; $i <= 10; $i++)
                                            <option value="{{ $i }}" @if($i == 0) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>
                                <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">更新</button>
                                </div>
                        </form>
                        </div>

                        <div  class="md:w-1/12">{{ $cartItem->set->set_price }}<span class="text-sm text-gray-700">円(税込)</span></div>
                        <!-- Delete button -->
                        <form action="{{ route('cart.delete', $cartItem->set_id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="set_id" value="{{ $cartItem->set_id }}">
                            <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700"
                                onclick="return confirm('Are you sure?')">削除</button>
                        </form>
                    </div>
                @endif 
            @endforeach

            <div class="my-2">
                合計:{{ $totalAmount }}円(税込) 
            </div>
            <div>
                <button onclick="location.href='{{route('cart.checkout')}}'" class="flex w-[210px] justify-center mr-10 px-8 py-2 my-10 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600">
                    購入する
                </button>
                <button onclick="window.history.back();" class="flex w-[210px] justify-center mr-10 px-8 py-2 my-10 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600">
                    戻る
                </button>
            </div>
        </div>
    @endif
</div>
@endsection