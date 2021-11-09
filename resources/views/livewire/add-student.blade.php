<div class="w-screen h-screen flex justify-center items-center bg-gray-100">
<div class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
  <p class="mb-5 text-3xl uppercase text-gray-600">Add Student</p>
  @error('email')
  <span class="text-red-500">{{ $message }}</span>
  @enderror
    <input type="text" wire:model="name" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="Enter Name">
    <input type="email" wire:model="email" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="Enter Email">
    <input type="text" wire:model="contact" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="#Tel">
    <Label class="font-bold text-gray-500">Select Course</Label>
    <select name="" id="" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none">
      @foreach ($course as $c)
      <option value="{{ $c->id }}">{{ $c->course }}</option>  
      @endforeach
    </select>
    <button wire:click="submit" class="bg-green-500 p-2 hover:bg-green-300">Add Student</button>
</div>
</div>