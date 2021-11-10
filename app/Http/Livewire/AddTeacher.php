<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddTeacher extends Component
{
  public $name, $email, $contact;

  public function submit()
  {
    $this->validate([
      'name' => 'required',
      'email' => 'required|unique:teachers,email',
      'contact' => 'required',
    ]);

    $teach = Teacher::create([
      'name' => $this->name,
      'email' => $this->email,
      'contact' => $this->contact,
      'password' => Hash::make('teacher01'),
      'user_type' => 2,
    ]);
    User::create([
      'name' => $teach->name,
      'email' => $teach->email,
      'password' => $teach->password,
      'user_type' => $teach->user_type,
    ]);
    session()->flash('go','Teacher Added');
  }

  public function render()
  {
    return view('livewire.add-teacher', ['teacher' => Teacher::paginate(4)]);
  }
}
