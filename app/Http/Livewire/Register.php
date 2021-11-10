<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
  public $name,$email,$password,$confirmation,$type;

  public function Register(){
    
  $val =  $this->validate([
      'name' => 'required|min:2',
      'email' => 'required|unique:users,email',
      'password' => 'required|min:5',
      'confirmation' => 'required|same:password',
    ]);

    if($val){
    User::create(
      [
        'name'=> $this->name,
        'email'=> $this->email,
        'password'=> Hash::make($this->password),
        'user_type'=> 3,
      ]);
      session()->flash('go','You have logged in');  
      return view('welcome');
    }
}
    public function render()
    {
        return view('livewire.register');
    }
}
