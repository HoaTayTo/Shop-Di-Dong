<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use function Ramsey\Uuid\v1;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::all();
        return view(
            'account.Cart.ShowCart',
            [
                'cart' => $cart,
            ]
        );
    }
    public function addToCart(Request $request)
    {
        $check_cart = Cart::where('ProductID', $request->product_id)
            ->where('customerID', session('UserID'))
            ->first();
        // dd($check_cart);
        if ($check_cart) {
            $check_cart->quality += $request->quantity;
            $check_cart->save();
        } else {
            $cart = Cart::create([
                // ``, `ProductID`, `customerID`, `quality`
                'ProductID' => $request->product_id,
                'customerID' => session('UserID'),
                'quality' => $request->quantity,
            ]);
        }
        return redirect()->back()->with('success', 'Add to cart successful!');
    }
    public function deleteItemCart(Request $request)
    {
        $cartItem = Cart::where('cartID', $request->cartID)->first();
        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->route('cart.showCart')->with('success', 'Delete item success!');
    }
    public function UpDateCartAdd(Request $request)
    {
        $cartItem = Cart::where('cartID', $request->cartID)->first();
        if ($cartItem) {
            $cartItem->quality = $cartItem->quality + 1;
            $cartItem->save();
        }

        return redirect()->route('cart.showCart');
    }
    public function UpDateCartTru(Request $request)
    {
        $cartItem = Cart::where('cartID', $request->cartID)->first();
        if ($cartItem) {
            $cartItem->quality--;
            $cartItem->save();
        }
        if($cartItem->quality==0)
        {
            $cartItem->delete();
        }
        return redirect()->route('cart.showCart');
    }
}
