<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class NCourse extends Component
{
  
public $name;

public function submit()
{
  $this->validate([
    'name' => 'required|unique:courses,course'
  ]);

  Course::create([
    'course' => $this->name,
  ]);
  session()->flash('go', 'Course Added Successfully');
}

public function delete($id)
{
  $delete = Course::find($id);
  $delete->delete();
}


    public function render()
    {
        return view('livewire.n-course',['courses'=> Course::all()]);
    }
}
