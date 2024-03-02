@extends('layouts.app')

@section('content')
    <div class="max-w-4xl px-4 py-8 mx-auto mt-8">
        <h2 class="mb-4 text-xl font-semibold">カート一覧</h2>

        @if ($cartItems->isEmpty())
            <div class="text-center">
                <p>カートに商品は入っていません。</p>
                <div class="mt-4 space-x-2">
                    <a href="{{ route('items.index') }}"
                        class="inline-block px-6 py-2 text-white transition bg-green-500 rounded hover:bg-green-600">商品一覧に戻る</a>
                    <a href="{{ route('sets.index') }}"
                        class="inline-block px-6 py-2 text-white transition bg-green-500 rounded hover:bg-green-600">セット覧に戻る</a>
                </div>
            </div>
        @else
            @foreach ($cartItems as $cartItem)
                <div class="flex items-center mb-4 overflow-hidden bg-white rounded-lg shadow">
                    <div class="flex-shrink-0">
                        @if ($cartItem->item && $cartItem->item->item_image)
                            <img class="object-cover w-24 h-24" src="{{ asset('storage/' . $cartItem->item->item_image) }}"
                                alt="商品画像">
                        @elseif ($cartItem->set && $cartItem->set->set_image)
                            <img class="object-cover w-24 h-24" src="{{ asset('storage/' . $cartItem->set->set_image) }}"
                                alt="セット画像">
                        @else
                            <img class="object-cover w-24 h-24" src="{{ asset('path/to/default-image.png') }}"
                                alt="デフォルト画像">
                        @endif
                    </div>
                    <div class="flex-grow p-4">
                        <h3 class="font-semibold">
                            {{ $cartItem->item ? $cartItem->item->item_name : $cartItem->set->set_name }}</h3>
                        <p>{{ $cartItem->item ? $cartItem->item->item_price : $cartItem->set->set_price }}円(税込)</p>
                        <div class="flex items-center mt-2">
                            <form
                                action="{{ $cartItem->item ? route('cart.update', $cartItem->item_id) : route('cart.update', $cartItem->set_id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="flex items-center space-x-2">
                                    <label for="quantity" class="text-sm">数量:</label>
                                    <select name="quantity" id="quantity" class="text-sm border-gray-300 rounded">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}"
                                                {{ $cartItem->quantity == $i ? 'selected' : '' }}>{{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    <button type="submit"
                                        class="px-4 py-1 text-sm text-white transition bg-blue-500 rounded hover:bg-blue-600">更新</button>
                                </div>
                            </form>
                            <form
                                action="{{ $cartItem->item ? route('cart.delete', $cartItem->item_id) : route('cart.delete', $cartItem->set_id) }}"
                                method="POST" class="ml-4">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="px-4 py-1 text-sm text-white transition bg-red-500 rounded hover:bg-red-600"
                                    onclick="return confirm('削除してよろしいですか？')">削除</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-6 text-right">
                <p class="text-lg font-semibold">合計: {{ $totalAmount }}円(税込)</p>
                <a href="{{ route('items.index') }}"
                    class="inline-block px-6 py-2 mt-2 text-white transition bg-[#b2d9ad] rounded hover:bg-green-600">商品一覧に戻る</a>
                <a href="{{ route('cart.checkout') }}"
                    class="inline-block px-6 py-2 mt-2 text-white transition bg-green-500 rounded hover:bg-green-600">購入する</a>
            </div>
        @endif
    </div>
@endsection
