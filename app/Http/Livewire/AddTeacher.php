<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class AddTeacher extends Component
{
  use WithPagination;
  public $name, $email, $contact, $findid;
  public $editmode = false;

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
    session()->flash('go', 'Teacher Added');
    $this->email = null;
    $this->name = null;
    $this->contact = null;
  }
  public function enteredit($id)
  {
    $teacherid = Teacher::where('id', $id)->get();
    $this->name = $teacherid[0]['name'];
    $this->email = $teacherid[0]['email'];
    $this->contact = $teacherid[0]['contact'];
    $this->findid = $id;
    $this->editmode = True;
  }

  public function edit()
  {
    $teachertbl = Teacher::find($this->findid);
    $teachertbl->name = $this->name;
    $teachertbl->email = $this->email;
    $teachertbl->contact = $this->contact;
    $teachertbl->save();
    $this->editmode = False;
    $this->email = null;
    $this->name = null;
    $this->contact = null;
  }

  public function back()
  {
    $this->name = null;
    $this->email = null;
    $this->contact = null;
    $this->editmode = false;
  }

  public function delete($id)
  {
    $delete = Teacher::find($id);
    $delete->delete();
  }

  public function render()
  {
    return view('livewire.add-teacher', ['teacher' => Teacher::paginate(4)]);
  }
}
