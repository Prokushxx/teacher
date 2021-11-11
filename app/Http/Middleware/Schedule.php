<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Schedule
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
    if (auth()->user()->user_type == 2 || auth()->user()->user_type == 3) {
      dd(auth()->user());
      return redirect(url('schedule'));
    } else {
      return $next($request);
    }
  }
}
