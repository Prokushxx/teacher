<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class AddStudent extends Component
{
  use WithPagination;
  public $name, $email, $contact, $select, $findid;
  public $editmode = false;

  public function submit()
  {
    $this->validate([
      'name' => 'required',
      'email' => 'required|email',
      'contact' => 'required',
      'select' => 'required',
      
    ]);
    $studentid = Student::create([
      'name' => $this->name,
      'email' => $this->email,
      'contact' => $this->contact,
      'course_id' => $this->select,
      'password' => Hash::make('student01'),
      'user_type' => 3,
    ]);

    User::create([
      'name' => $studentid->name,
      'email' => $studentid->email,
      'password' => $studentid->password,
      'user_type' => $studentid->user_type,
    ]);
    session()->flash('go', 'Student Added');
  }

  public function edit($unid)
  {
    $newid = Student::with('course')->where('id',$unid)->get();
    // dd($newid);
    $this->name = $newid[0]['name'];
    $this->email = $newid[0]['email'];
    $this->contact = $newid[0]['contact'];
    $this->findid = $unid;
    $this->editmode = True;
  }

  public function update()
  {
    $identify = Student::find($this->findid);
    // dd($identify);
    $identify->name = $this->name;
    $identify->email = $this->email;
    $identify->contact = $this->contact;
    $identify->save();
    $this->editmode = false;
  }

  public function back(){
    $this->name = null;
    $this->email = null;
    $this->contact = null;
    $this->select = null;
    $this->editmode = false; 
  }

  public function delete($id){
    $delete = Student::find($id);
    $delete->delete();
  }

  public function render()
  {
    return view('livewire.add-student', ['course' => Course::all(), 'students' => Student::with('course')->paginate(6)]);
  }
}
