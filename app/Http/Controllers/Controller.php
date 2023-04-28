<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        // $cart = collect();

        // if (auth()->check()) {
        //     $cart = Cart::where('user_id', auth()->user()->id)->with('products')->get();
        // }

        // $totalCart = $cart->sum(function ($item) {
        //     // return $item->products->price * $item->quantity;
        //     foreach ($item->products as $prod) {
        //         return $prod->price * $item->quantity;
        //     }
        // });

        return view('index');
            // ->with('userCart', $cart)
            // ->with('totalAmount', $totalCart);
    }

}
