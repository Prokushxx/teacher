@if ($editmode)
  

<div class="w-screen h-90 flex justify-center items-center bg-gray-100">
    <div class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
        <p class="mb-5 text-3xl uppercase text-gray-600">Add Student</p>
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        @if (session('go'))
            <span class="text-green-500">{{ session('go') }}</span>
        @enderror 
        <input type="text" wire:model="name"
            class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="Enter Name">
        <input type="email" wire:model="email"
            class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="Enter Email">
        <input type="text" wire:model="contact"
            class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="#Tel">
        <Label class="font-bold text-gray-500">Select Course</Label>
        <select wire:model="select" class="mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none">
            @foreach ($course as $c)
                <option value="{{ $c->id }}">{{ $c->course }}</option>
            @endforeach
        </select>
        <button wire:click="submit" class="bg-green-500 p-2 hover:bg-green-300">Add Student</button>
</div>
</div>
@else
  @include('livewire.edit-student')
@endif

<div class=" bg-gray-100">
<div class="w-2/3 mx-auto bg-gray-100">
    <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
            <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
                <tr>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Name</th>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Email</th>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Subject</th>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $stud)

                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $stud->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $stud->email }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $stud->course->course }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <button wire:click="editstud({{ $stud['id'] }})"
                                class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-yellow-400 hover:bg-yellow`-600">Edit</button>
                            {{-- <a href="#"
                                class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue-400 hover:bg-blue-600">View</a> --}}
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div>
    {{ $students->links() }}
</div>
</div>
