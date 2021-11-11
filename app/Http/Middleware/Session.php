<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Session
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
    if (!$request->session()->has('user')) {
      return redirect(url('/'));
    } else {
      return $next($request);
    }
  }
}
