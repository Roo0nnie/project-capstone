@foreach($roomList as $rooms)

{{ $rooms->id }}
{{ $rooms->room_name }}

@endforeach

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-950 leading-tight">
            {{ __('Quick Booking') }}
        </h2>
    </x-slot>

    <div class="mx-auto lg:mx-1 sm:px-6 lg:px-8 content-center">
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 shadow-xl">
                <div class=" bg-teal-700/[.3] overflow-hidden shadow-xl sm:rounded-lg">
                    <div id="#rooms" class="p-6 text-white text-xl font-extrabold ">
                        {{ __("Rooms") }}
                    </div>

                    <div class="grid grid-cols-1 place-content-center md:grid-cols-2 lg:grid-cols-3 mb-5">
                       
    <!--card-->
    <div class="mb-5">
    <div class="max-w-7xl mx-2 sm:mx-5  bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <h3 class="mb-3 text-xl font-bold text-indigo-600">Room 1</h3>
      <div class="relative">
        <img class="w-full rounded-xl" src="https://campuestohanhighlandresort.com.ph/wp-content/uploads/2021/11/DSC_2119.jpg" alt="Colors" />
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Log Cabin 3PAX</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>Book Date</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Size</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span>
          <p>Price</p>
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Reserve Now!</button>
      </div>
    </div>
</div>
    <!--card-->
                        
<!--card-->
<div class="mb-5">
    <div class="max-w-7xl mx-2 sm:mx-5 bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <h3 class="mb-3 text-xl font-bold text-indigo-600">Room 2</h3>
      <div class="relative">
        <img class="w-full rounded-xl" src="https://campuestohanhighlandresort.com.ph/wp-content/uploads/2021/11/DSC_4617-scaled.jpg" alt="Colors" />
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Bonita Hut</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>Book Date</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Size</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span>
          <p>Price</p>
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Reserve Now!</button>
      </div>
    </div>
</div>
    <!--card-->
<!--card-->
<div class="mb-5">
    <div class="max-w-7xl mx-2 sm:mx-5  bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <h3 class="mb-3 text-xl font-bold text-indigo-600">Room 3</h3>
      <div class="relative">
        <img class="w-full rounded-xl max-h-15" src="https://campuestohanhighlandresort.com.ph/wp-content/uploads/2021/11/DSC_2062.jpg" alt="Colors" />
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Teepee Hut Suite</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>Book Date</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Size</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span>
          <p>Price</p>
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Reserve Now!</button>
      </div>
    </div>
</div>
    <!--card-->
     <!--card-->
     <div class="mb-5">
    <div class="max-w-7xl mx-2 sm:mx-5  bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <h3 class="mb-3 text-xl font-bold text-indigo-600">Room 1</h3>
      <div class="relative">
        <img class="w-full rounded-xl" src="https://campuestohanhighlandresort.com.ph/wp-content/uploads/2021/11/DSC_2119.jpg" alt="Colors" />
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Log Cabin 3PAX</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>Book Date</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Size</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span>
          <p>Price</p>
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Reserve Now!</button>
      </div>
    </div>
</div>
    <!--card-->
                        
<!--card-->
<div class="mb-5">
    <div class="max-w-7xl mx-2 sm:mx-5 bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <h3 class="mb-3 text-xl font-bold text-indigo-600">Room 2</h3>
      <div class="relative">
        <img class="w-full rounded-xl" src="https://campuestohanhighlandresort.com.ph/wp-content/uploads/2021/11/DSC_4617-scaled.jpg" alt="Colors" />
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Bonita Hut</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>Book Date</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Size</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span>
          <p>Price</p>
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Reserve Now!</button>
      </div>
    </div>
</div>
    <!--card-->
<!--card-->
<div class="mb-5">
    <div class="max-w-7xl mx-2 sm:mx-5  bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <h3 class="mb-3 text-xl font-bold text-indigo-600">Room 3</h3>
      <div class="relative">
        <img class="w-full rounded-xl max-h-15" src="https://campuestohanhighlandresort.com.ph/wp-content/uploads/2021/11/DSC_2062.jpg" alt="Colors" />
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Teepee Hut Suite</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>Book Date</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Size</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </span>
          <p>Price</p>
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Reserve Now!</button>
      </div>
    </div>
</div>
    <!--card-->
    

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
