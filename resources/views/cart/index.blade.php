@extends('layouts.app')

@section('content')
    <div class="w-full px-5 py-24 mx-auto mt-5">
        <h2>カート一覧</h2>
        <table class="table-auto">
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
                        <td class="border border-slate-600 ">{{ $cartItem->item->item_name }}</td> {{-- Adjust based on your item name field --}}
                        <td class="border border-slate-600 ">{{ $cartItem->quantity }}</td>
                        <td class="border border-slate-600 ">{{ $cartItem->item->item_price }}</td> {{-- Adjust formatting as needed --}}
                        <td class="border border-slate-600 ">{{ $cartItem->quantity * $cartItem->item->item_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>合計: ${{ $totalAmount }}</h3>
    </div>
@endsection
