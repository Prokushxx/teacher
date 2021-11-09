<div class="w-screen h-screen flex justify-center items-center bg-gray-100">
  <div class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
    <p class="mb-5 text-3xl uppercase text-gray-600">Register</p>
  @if (session('go'))
 <span class="bg-green-500 hover:bg-green-300 px-2 pb-0"> {{ session('go') }}</span> 
  @endif
  @error('name')
  <span class="text-red-500">{{ $message }}</span>
  @enderror
  <input type="text" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" wire:model="name" placeholder="name">
  
  @error('email')
  <span class="text-red-500">{{ $message }}</span>
  @enderror
  <input type="email" wire:model="email" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="email">
  
  @error('password')
  <span class="text-red-500">{{ $message }}</span>
  @enderror
  <input type="password" wire:model="password" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="password">
  
  @error('confirmation')
  <span class="text-red-500">{{ $message }}</span>
  @enderror
  <input type="password" placeholder="confirm password" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" wire:model="confirmation">
  <button wire:click="Register" class="bg-yellow-500 hover:bg-yellow-300 p-2">Register</button>
  </div>
</div>
