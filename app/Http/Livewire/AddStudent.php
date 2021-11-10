<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\PseudoTypes\True_;

class AddStudent extends Component
{
  use WithPagination;
  public $name, $email, $contact, $select, $studentid, $findid;
  public $editmode = false;

  public function submit()
  {
    $this->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
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
    $this->id = $studentid->id;
    User::create([
      'name' => $studentid->name,
      'email' => $studentid->email,
      'password' => $studentid->password,
      'user_type' => $studentid->user_type,
    ]);
    // dd($studentid);
    session()->flash('go', 'Student Added');
  }

  public function editstud($id)
  {
    $newid = Student::find($id);
    $this->editmode = True;
    $this->name = $newid->name;
    $this->findid = $id;
    $this->email = $newid->email;
    $this->contact = $newid->contact;
    $this->course = $newid->course->course;
  }

  public function update()
  {
    $identify = Student::find($this->findid);
    $identify->name = $this->name;
    $identify->email = $this->email;
    $identify->contact = $this->contact;
    $identify->course = $this->select;
    $identify->save();
    $this->editmode = false;
  }

  public function back(){
    $this->editmode = True;
  }

  public function render()
  {
    return view('livewire.add-student', ['course' => Course::all(), 'students' => Student::with('course')->paginate(6)]);
  }
}
