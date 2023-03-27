<div class="fixed  left-0 top-0   opacity-100 w-full md:w-full h-full hidden cover"id="form2" >
  <form action="{{route('Courses')}}" enctype="multipart/form-data" method="Post" id="createform" class="mb-4 bg-white w-full md:w-2/4 h-min bg-white p-5 rounded-xl shadow-xl m-auto absolute left-[0%] top-[10%] md:top-[10%] md:left-[25%] text-center fixed">
    @csrf
    <div class="grid grid-cols-2 gap-4">
      <div class="form-group mb-6">
       <label for="CourseLogo" accept="image/*"
         class="bg-blue-500 px-3  py-2 text-white font-bold  block rounded-lg" style="width: 100%">Course Logo</label>
        
        <input type="file" name="CourseLogo" id="CourseLogo" accept="image/*"  class="form-control 
          hidden
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
          aria-describedby="Logo" placeholder="">
      </div> 
      <div class="form-group mb-6">
        <input type="text" name="CourseName" id="CourseName" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
          aria-describedby="emailHelp124" placeholder="Course name * ">
      </div>
    </div>
    <div class="form-group mb-6">
      <input type="text" name="CourseDesc" id="CourseDesc" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="Course desc *">
    </div>
    <div class="form-group mb-6">
      <input type="url" name="CourseLink" id="CourseLink" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="Zoom Link * ">
    </div>
    <div class="form-group mb-6">
      <input type="number"  name="CoursePrice" id="CoursePrice" class="form-control block
        w-full
        px-3
        hidden
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="Price * ">
    </div>
    <div class="grid grid-cols-4 gap-4">
      <div class="form-group mb-6 col-span-4">
        <select name="CourseType_id" id="CourseType_id" class="form-control 
      block 
       w-full
       px-3
       py-1.5
       text-base
       font-normal
       text-gray-700
       bg-white bg-clip-padding
       border border-solid border-gray-300
       rounded
       transition
       ease-in-out
       m-0
       focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
       <option value="" disabled selected>*</option>  
        <option value="1">Main</option>  
        <option value="2">Master</option>
      </select> 
      </div>
    </div>

    <div class="form-group mb-6">
      <input type="number" min="10"  name="FullQty" id="FullQty" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="FullQty">
    </div>
    <div class="grid grid-cols-2">
    <div class="form-group form-check text-center mb-6">
      <input type="checkbox"
        name="IsFree"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="IsFree" checked value="1" onchange="$('#CoursePrice').toggle()">
      <label class="form-check-label inline-block text-gray-800" for="IsFree">Is Free</label>
    </div>
    
    <div  class="form-group form-check text-center mb-6">
      <input  type="checkbox"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="State" checked value="1" name="State"> 
      <label class="form-check-label inline-block text-gray-800" for="State">Active</label>
    </div>
  </div>
    <button type="submit"  class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      mt-4
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out" id="CrSubmit">Create</button>
  </form>
</div>
{{-- End Form --}}
</div>
{{-- Edit Form --}}
{{-- End Edit Form --}}

{{-- New User Form --}}

<div class="fixed  left-0 top-0   opacity-100 w-full md:w-full h-full hidden" id="NewUserForm">
  <form method="POST"  class="mb-4 bg-white w-full md:w-2/4 h-min bg-white p-5 rounded-xl shadow-xl m-auto absolute left-[0%] top-[10%] md:top-[10%] md:left-[25%] text-center fixed" id="NewUser">
    @csrf
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
  </div>

  <!-- Email Address -->
  <div class="mt-4">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
  </div>


  {{-- Age  --}}
  <div class="mt-4">
      <x-input-label for="Age" :value="__('Age')" />
      <input id="Age" class="block mt-1 w-full" type="Number" name="Age" :value="old('Age')" required  pattern='[0-9]' min='1' max='100' />
      <x-input-error :messages="$errors->get('Age')" class="mt-2" />
  </div>
  {{-- Gender --}}
  <div class="mt-4">
   <label for="Gender">{{__('Gender')}}</label>
    <select name="Gender" class="block mt-1 w-full" id="Gender">
      <option  value="*" disabled selected>*</option>
      <option  value="Male">Male</option>
      <option value="FeMale">FeMale</option>
    </select>
  </div>
  <!-- Password -->
  <div class="mt-4">
      <x-input-label for="password" :value="__('Password')" />
      <x-text-input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
  </div>

  <!-- Confirm Password -->
  <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

      <x-text-input id="password_confirmation" class="block mt-1 w-full"
                      type="password"
                      name="password_confirmation" required />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
  </div>
    <button type="submit" class="
      px-6
      py-2.5
      bg-blue-600
      mt-4
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out" id="UsSubmit">Submit</button>
  </form>
</div>
{{-- end User form --}}
{{-- Edit user --}}

<div class="fixed  left-0 top-0   opacity-100 w-full md:w-full h-full hidden" id="EditUserForm">
  <form  class="mb-4 bg-white w-full md:w-2/4 h-min bg-white p-5 rounded-xl shadow-xl m-auto absolute left-[0%] top-[10%] md:top-[10%] md:left-[25%] text-center fixed" id="EditUser">
    <div>
      <x-input-label for="Ename" :value="__('Name')" />
      <x-text-input id="Ename" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
  </div>

  <!-- Email Address -->
  <div class="mt-4">
      <x-input-label for="Eemail" :value="__('Email')" />
      <x-text-input id="Eemail" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
  </div>


  {{-- Age  --}}
  <div class="mt-4">
      <x-input-label for="EAge" :value="__('Age')" />
      <x-text-input id="EAge" class="block mt-1 w-full" type="Number" name="EAge" :value="old('EAge')" required  pattern='[0-9]' min='1' max='100' />
      <x-input-error :messages="$errors->get('EAge')" class="mt-2" />
  </div>

  <div class="mt-4">
    <label for="EGender">{{__('Gender')}}</label>
     <select name="EGender" class="block mt-1 w-full" id="EGender">
       <option value="*" disabled selected>*</option>
       <option value="Male">Male</option>
       <option value="FeMale">FeMale</option>
     </select>
   </div>

    <button type="submit" class="
      px-6
      py-2.5
      mt-4
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out" id="EUsSubmit">Submit</button>
  </form>
</div>
{{-- end Edit user --}}