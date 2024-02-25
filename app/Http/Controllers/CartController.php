<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); // Get the logged-in user's ID
        $cartItems = Cart::with(['item', 'set'])->where('user_id', $userId)->get();

        $totalAmount = 0;

        foreach ($cartItems as $cartItem) {
            if ($cartItem->item) {
                // Calculate total for individual items
                $totalAmount += $cartItem->item->item_price * $cartItem->quantity;
            }

            if ($cartItem->set) {
                // Assuming you have a method to calculate the total price of a set
                // This could be a method in your Set model that sums up the price of all items in the set
                // For simplicity, let's assume each set has a flat price stored in a `price` attribute
                $totalAmount += $cartItem->set->set_price * $cartItem->quantity;
            }
        }

        return view('cart.index', compact('cartItems', 'totalAmount'));
    }


    /**
     * Show the form for creating a new resource.
     */

    public function add(Request $request)
    {
        $userId = Auth::id(); // Get the logged-in user's ID

        if ($request->has('item_id')) {
            // Adding an individual item to the cart
            $itemInCart = Cart::where('user_id', $userId)
                ->where('item_id', $request->item_id)
                ->first();

            if ($itemInCart) {
                $itemInCart->quantity += $request->quantity ?? 1; // Increment existing quantity
                $itemInCart->update();
            } else {
                Cart::create([
                    'user_id' => $userId,
                    'item_id' => $request->item_id,
                    'quantity' => $request->quantity ?? 1,
                    // No 'set_id' since this is an individual item
                ]);
            }
        } elseif ($request->has('set_id')) {
            // Adding an entire set to the cart
            $setInCart = Cart::where('user_id', $userId)
                ->where('set_id', $request->set_id)
                ->first();

            \Log::debug('Request data:', $request->all());



            if ($setInCart) {
                $setInCart->quantity += $request->quantity ?? 1; // Increment existing quantity
                $setInCart->update();
            } else {
                Cart::create([
                    'user_id' => $userId,
                    'set_id' => $request->set_id,
                    'quantity' => $request->quantity ?? 1,
                    // No 'item_id' since this is a set
                ]);
            }
        } else {
            // Handle case where neither item_id nor set_id is provided
            return back()->with('error', 'No item or set specified.');
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully.');
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


    public function destroy(string $id)
    {
        //
    }
}
