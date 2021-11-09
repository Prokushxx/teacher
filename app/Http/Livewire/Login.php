<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
  public $email, $password,$t;

   
  public function login()
  {
    $this->validate([
      'email' => 'required|exists:users,email',
      'password' => 'required',
    ]);

    if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {

      if (auth()->user()->user_type == 2) {
        session()->flash('success', 'You have logged in Teacher');
      } else {
        session()->flash('error', 'NOOOOOOOOO you naaah teach');
      }
    } else {
      session()->flash('error', 'NOOOOOOOOO sumn nuh right yah');
    }
  }
  public function render()
  {
    return view('livewire.login');
  }
}
