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

      if (auth()->user()->user_type = 1) {
        session()->flash('success', 'You have logged in Admin');
        return redirect(url('addstudent'));
      } elseif (auth()->user()->user_type == 2) {
        return redirect(url('schedule'));
      } elseif (auth()->user()->user_type == 3) {
        return redirect(url('schedule'));
      } else {
        session()->flash('error', 'Not a teacher cannot log in');
      }
    } else {
      session()->flash('error', 'Information does not match');
    }
  }
  public function render()
  {
    return view('livewire.login');
  }
}
