<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (auth()->user()->user_type == 1){
        return $next($request);
      }
      elseif(auth()->user()->user_type == 2){
        return redirect(url('schedule'));
      }
      elseif(auth()->user()->user_type == 3){
        return redirect(url('schedule'));
      }
      else{
        return redirect(url('/'));
      }
    }
}
