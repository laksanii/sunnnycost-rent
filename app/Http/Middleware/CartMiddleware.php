<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $carts = collect([]);
        view()->share([
            'carts' => $carts,
            'cart_count' => $carts->count(),
        ]);
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            view()->share([
                'carts' => $carts,
                'cart_count' => $carts->count(),
            ]);
        }

        return $next($request);
    }
}