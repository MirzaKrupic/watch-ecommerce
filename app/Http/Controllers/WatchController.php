<?php

namespace App\Http\Controllers;

use App\CustomClass\Cart as CustomClassCart;
use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::all()->orderBy('created_at', 'desc')->paginate(20);

        dd($watches);

        return view('home', [
            'watches' => $watches
        ]);
    }

    public function addToCart(Request $request, $id)
    {
        $watch = Watch::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new CustomClassCart($oldCart);
        $cart->add($watch, $watch->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('home');
    }
}
