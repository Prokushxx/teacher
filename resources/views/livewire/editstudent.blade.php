<div class="w-screen h-90 flex justify-center items-center bg-gray-100">

  <div class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">

      <p class="mb-5 text-3xl uppercase text-gray-600">Edit Student</p>

      @error('email')
          <span class="text-red-500">{{ $message }}</span>
      @enderror

      @error('select')
          <span class="text-red-500">{{ $message }}</span>
      @enderror

      @error('course')
          <span class="text-red-500">{{ $message }}</span>
      @enderror

      @if (session('go'))
          <span class="text-green-500">{{ session('go') }}</span>
      @endif
      <input type="hidden" wire:model="findid">

      <input type="text" wire:model="name"
          class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none">

      <input type="email" wire:model="email"
          class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="Enter Email">

      <input type="text" wire:model="contact"
          class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="#Tel">

      <button wire:click="update" class="bg-green-500 p-2 hover:bg-green-300">Update Student</button>

      <button wire:click="back" class="bg-red-500 text-white p-2 rounded mt-3 hover:bg-red-400">Go back</button>

</div>
</div>