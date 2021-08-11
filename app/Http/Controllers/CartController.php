<?php

namespace App\Http\Controllers;

use App\CustomClass\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function index()
    {
        if(!Session::has('cart'))
        {
            return view('cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
