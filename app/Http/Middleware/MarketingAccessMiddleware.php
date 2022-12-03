<?php

namespace App\Http\Middleware;

use BaconQrCode\Common\Mode;
use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Member;

class MarketingAccessMiddleware
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
        return $next($request);

    }
}
