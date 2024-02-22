@extends('layouts.app')

@section('content')
    <div class="w-full px-5 py-24 m-5 mx-auto">
        <h2>カート一覧</h2>
        <table class="w-2/3 mt-5 table-fixed">
            <thead>
                <tr>
                    <th class="border border-slate-600 ">品名</th>
                    <th class="border border-slate-600 ">数量</th>
                    <th class="border border-slate-600 ">単価</th>
                    <th class="border border-slate-600 ">金額</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $cartItem)
                    <tr>
                        <td class="border-solid border-slate-600 ">{{ $cartItem->item->item_name }}</td>
                        {{-- Adjust based on your item name field --}}
                        <td class="border-solid border-slate-600">{{ $cartItem->quantity }}</td>
                        <td class="border-solid border-slate-600 ">{{ $cartItem->item->item_price }}</td>
                        {{-- Adjust formatting as needed --}}
                        <td class="border-solid border-slate-600 ">{{ $cartItem->quantity * $cartItem->item->item_price }}
                        </td>
                        <td>
                            <!-- Delete button -->
                            <form action="{{ route('cart.delete', $cartItem->item_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3 class="m-5 font-bold">合計: &yen;{{ $totalAmount }}</h3>
    </div>
@endsection
