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
        $userId = Auth::id(); // Get the logged-in user's ID
        // $cartItems = Cart::with('item') // Assuming a relationship method `item()` exists in Cart model
        //     ->where('user_id', $userId)
        //     ->get();
        $cartItems = Cart::with('item')->where('user_id', Auth::id())->get();

        $totalAmount = $cartItems->reduce(function ($carry, $item) {
            return $carry + ($item->item->item_price * $item->quantity); // Adjust based on your item price field
        }, 0);

        return view('cart.index', compact('cartItems', 'totalAmount'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function add(Request $request)
    {
        // \Log::debug($request->all());
        //dd($request->all());

        // $itemInCart = Cart::where('user_id', Auth::id())->first(); //カートに商品があるか確認
        $itemInCart = Cart::where('user_id', Auth::id())->where('item_id', $request->item_id)->first();


        if ($itemInCart) {
            $quantity = $request->quantity ?? 1; // Default to 1 if not set
            $itemInCart->quantity += $quantity; //合った場合した数量分追加
            $itemInCart->update();
        } else {
            if ($request->item_id) {
                Cart::create([
                    'user_id' => Auth::id(),
                    'item_id' => $request->item_id,
                    'quantity' => $request->quantity
                ]);

                return redirect()->route('cart.index')->with('success', 'Item added to cart successfully.');
            }
        }
        //dd('テスト');
    }

    public function addSet(Request $request)
    {
        $setId = $request->set_id; // Assume you're passing a `set_id` parameter
        $set = Set::with('recipes.items')->findOrFail($setId); // Fetch the set with all recipes and items

        // Logic to add all items from the set to the cart
        foreach ($set->recipes as $recipe) {
            foreach ($recipe->items as $item) {
                // Check if the item is already in the cart
                $itemInCart = Cart::where('user_id', Auth::id())
                    ->where('item_id', $item->id)
                    ->first();

                if ($itemInCart) {
                    // Update quantity if the item is already in the cart
                    $itemInCart->quantity += 1; // This assumes you're adding one set at a time
                    $itemInCart->update();
                } else {
                    // Add new item to the cart if not already present
                    Cart::create([
                        'user_id' => Auth::id(),
                        'item_id' => $item->id,
                        'quantity' => 1, // This assumes each item from the set is added once
                        'set_id' => $setId // Associate this cart entry with the set
                    ]);
                }
            }
        }

        return redirect()->route('cart.index')->with('success', 'Set added to cart successfully.');
    }


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

    public function deleteItem($item_id)
    {
        $item = Cart::where('item_id', $item_id)->first();
        if ($item) {
            $item->delete();
            return back()->with('success', 'Item removed from cart successfully.');
        } else {
            return back()->with('error', 'Item not found.');
        }
    }

    public function destroy(string $id)
    {
        //
    }
}
