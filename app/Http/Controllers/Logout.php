<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
  public function logout(Request $req)
  {
    if ($req->session()->has('user')) {
      dd($req);
      $req->session()->flush();
      return redirect(url('/'));
    }
    return redirect(url('/'));
  }
}
