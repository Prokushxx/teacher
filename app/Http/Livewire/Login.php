<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
  public $email, $password, $t;


  public function login()
  {
    $this->validate([
      'email' => 'required|exists:users,email',
      'password' => 'required',
    ]);

    if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
      if (auth()->user()->user_type == 1) {
        return redirect(url('addstudent'));
      } else {
        return  redirect(url('schedule'));
      }
    } else {
      session()->flash('error', 'Something is wrong');
    }
  }
  public function render()
  {
    return view('livewire.login');
  }
}
