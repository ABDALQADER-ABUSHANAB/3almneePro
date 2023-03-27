
<span

class="absolute text-gray-900 text-4xl top-3 right-4 cursor-pointer bg-white"
onclick="openSidebar()"
>
<i class="bi bi-filter-right  rounded-md mb-2"></i>
</span>
<div
class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 z-90"
>
<div class="text-gray-100 text-xl z-90">
  <div class="p-2.5 mt-1 flex items-center">
    <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
    <h1 class="font-bold text-gray-200 text-[15px] ml-3">3almnee</h1>
    <i
    class="bi bi-x cursor-pointer ml-28 "
    onclick="openSidebar()"
    ></i>
  </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <div
        class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
      >
      <button id="getCourse">
        <i class="bi bi-search text-sm">

          </i>
        </button>
        <input
          type="text"
          placeholder="Search"
          class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
          id="SearchBox"
        />
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-white font-bold">                            
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
              {{ __('Dashboard') }}
            </x-nav-link></span>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
      <i class="bi bi-bookmark-fill"></i>
      <span class="text-[15px] ml-4 text-white font-bold"> 
        <x-nav-link :href="route('Courses')" :active="request()->routeIs('Courses')">
          {{ __('Courses') }}
        </x-nav-link></span>
      </div>
{{-- courses --}}
{{-- users --}}
@if (in_array('UserControl',Auth::user()->rules))
    

      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-person-workspace"></i>
        <span class="text-[15px] ml-4 text-white font-bold"> 
        <x-nav-link :href="route('Users')" :active="request()->routeIs('Users')">
            {{ __('Users') }}
        </x-nav-link></span>
      </div>
@endif
{{-- end users --}}
{{-- chat --}}
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
      <i class="bi bi-chat-fill"></i>
        <span class="text-[15px] ml-4 text-white font-bold"> 
        <x-nav-link :href="route('chatify')" :active="request()->routeIs('Courses')">
            {{ __('Chat') }}
        </x-nav-link></span>
      </div>
{{-- end  chat --}}
{{-- Auth Secition --}}
      <div class="my-4 bg-gray-600 h-[1px]"></div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()"
      >
      <i class="bi bi-person-lines-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-200 font-bold"><div>{{ Auth::user()->name }}</div></span>
          <span class="text-sm rotate-180" id="arrow">
            <i class="bi bi-chevron-down"></i>
          </span>
        </div>
      </div>
      <div
      class="text-left text-sm mt-2 w-4/5 mx-auto text-white font-bold hidden"
      id="submenu"
      >

      <x-dropdown-link :href="route('profile.edit')">
        <h1 class="cursor-pointer  p-2 hover:bg-blue-600 rounded-md mt-1 text-white">
                    {{ __('Profile') }}
                </h1>
            </x-dropdown-link>
      </div>

{{-- end auth --}}
@if (in_array('UserControl',Auth::user()->rules))
    
<div
class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
onclick="dropdown3()"
>
      <i class="bi bi-people"></i>
      <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-200 font-bold"><div>{{__('User Control')}}</div></span>
          <span class="text-sm rotate-180" id="arrow3">
            <i class="bi bi-chevron-down"></i>
          </span>
        </div>
      </div>
      <div
      class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden"
      id="submenu3"
      >
      
      <button id="NewUserBtn" class="w-full text-left" type="button">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          {{__('AddUser')}}
        </h1>
      </button>    
    </div>
    
    {{--  --}}
    @endif
    <div
    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown2()"
      >
      <i class="bi bi-diagram-3-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-200 font-bold"><div>{{__('Courses Tool')}}</div></span>
          <span class="text-sm rotate-180" id="arrow2">
            <i class="bi bi-chevron-double-down" id ="bt"></i>
            
          </span>
        </div>
      </div>
      <div
        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden"
        id="submenu2"
      >
      <button id="create" class="w-full text-left">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          {{__('Add Course')}}
        </h1>
      </button>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
        </h1>
      </div>
      


      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-box-arrow-in-right"></i>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
            
            <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                                    this.closest('form').submit();">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">
                    {{ __('Log Out') }}
                </span>
                </x-dropdown-link>
            </form>
      </div>
    </div>

