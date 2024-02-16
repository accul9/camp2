<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add(Request $request)
    {
        $itemInCart = Cart::where('item_id', $request->item_id);

        $itemInCart = Cart::where('user_id', Auth::id())->first(); //カートに商品があるか確認

        if ($itemInCart) {
            +$itemInCart->quantity += $request->quantity; //合った場合した数量分追加
            $itemInCart->update();
        } else {
            if ($request->item_id) {
                Cart::create([
                    'user_id' => Auth::id(),
                    'item_id' => $request->item_id,
                    'quantity' => $request->quantity
                ]);
            }
        }
        -dd('test');
        +dd('テスト');
    }
}
