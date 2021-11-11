<nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
  <div class="mb-2 sm:mb-0">
    @auth()
    
    <a href="{{ url('logout') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Log out</a>
      
    @endauth

  </div>
  <div>
    <a href="{{ url('addstudent') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Student</a>
    <a href="{{ url('addteacher') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Teacher</a>
    <a href="{{ url('addcourse') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Courses</a>
    {{-- <a href="/three" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Three</a> --}}
  </div>
</nav>
<div>
  @yield('content')
</div>
