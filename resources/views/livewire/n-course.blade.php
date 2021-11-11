<div>
  <div class="w-screen h-90 flex justify-center items-center bg-gray-100">

    <div class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
  
        <p class="mb-5 text-3xl uppercase text-gray-600">Add Course</p>
  
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
  
        @if (session('go'))
            <span class="text-green-500">{{ session('go') }}</span>
        @endif
        <input type="hidden" wire:model="findid">
  
        <input type="text" wire:model="name"
            class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none">
  
        <button wire:click="submit" class="bg-green-500 p-2 hover:bg-green-300">Add Course</button>
  
  </div>
  </div>
  
  
  <div>
    <div class=" bg-gray-100">
      <div class="w-2/3 mx-auto bg-gray-100">
          <div class="bg-white shadow-md rounded my-6">
              <table class="text-left w-full border-collapse">
                  <thead>
                      <tr>
                          <th
                              class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                              ID</th>
                          <th
                              class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                              Course Name</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($courses as $course)
      
                          <tr class="hover:bg-grey-lighter">
                              <td class="py-4 px-6 border-b border-grey-light">{{ $course->id }}</td>
                              <td class="py-4 px-6 border-b border-grey-light">{{ $course->course }}</td>
                              <td>
                                  <button wire:click="delete({{ $course->id }})"
                                      class="bg-blue-500 py-1 px-3 text-xs font-bold">Delete</button>
                              </td> 
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      <div>
  </div>
</div>
