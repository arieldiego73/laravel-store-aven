<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (auth()->check()) {
                $cart = Cart::where('user_id', auth()->user()->id)->with('product')->get();

                $totalCart = $cart->sum(function ($item) {
                    return $item->product->price * $item->quantity;
                });

                $view
                    ->with('totalCartAmount', $totalCart)
                    ->with('cart', $cart);
            }
        });
    }
}
