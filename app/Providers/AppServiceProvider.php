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
            $cart = collect();

            if (auth()->check()) {
                $cart = Cart::where('user_id', auth()->user()->id)->with('products')->get();
            }

            $totalCart = $cart->sum(function ($item) {
                foreach ($item->products as $prod) {
                    return $prod->price * $item->quantity;
                }
            });

            $view->with('totalCartAmount', $totalCart);

            // View::share('a', $cart);
            // View::share('b', $totalCart);
        });
    }
}
