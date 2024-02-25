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
                    @if ($cartItem->item)
                        <div>
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-3/12">画像</div>
                                <div class="md:w-4/12 md:ml-2">{{$cartItem->item->item_name  }}商品名</div>
                                <div class="md:w-3/12 flex justify-around">
                                    <div>{{  $cartItem->quantity }}個</div>
                                    <div>{{ $cartItem->item->item_price  }}<span class="text-sm text-gray-700">円(税込)</span></div>
                                </div>
                                <div class="md:w-2/12">
                                    {{-- @include('cart.delete', ['cartItem' => $cartItem]) --}}
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($cartItem->set)
                        <div>
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-3/12">画像</div>
                                <div class="md:w-4/12 md:ml-2">{{$cartItem->set->set_name  }}商品名</div>
                                <div class="md:w-3/12 flex justify-around">
                                    <div>{{  $cartItem->quantity }}個</div>
                                    <div>{{ $cartItem->set->set_price  }}<span class="text-sm text-gray-700">円(税込)</span></div>
                                </div>
                                <div class="md:w-2/12">
                                    {{-- @include('cart.delete', ['cartItem' => $cartItem]) --}}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
@endsection
