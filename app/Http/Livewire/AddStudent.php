<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class AddStudent extends Component
{
public $name,$email,$contact;
public function submit(){
  $this->validate([
    'name' => 'required',
    'email' => 'required|email',
    'contact' => 'required',
  ]) ;
  }
    public function render()
    {
        return view('livewire.add-student',['course'=>Course::all()]);
    }
}
