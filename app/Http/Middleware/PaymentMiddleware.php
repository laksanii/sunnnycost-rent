<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentMiddleware
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
        $orders = Order::where('payment_status', 'belum lunas')->get();
        foreach($orders as $order){
            if($order->created_at->addHours(2) < now()){
                $order->payment_status = 'gagal';
                $order->save();
            }
        }
        
        return $next($request);
    }
}