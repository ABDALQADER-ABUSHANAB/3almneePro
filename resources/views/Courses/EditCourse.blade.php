<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/fontawesome.min.js" integrity="sha512-nKvEIGRKw2OQCR34yLfnWnvrOBxidLG9aK+vzsBxCZ/9ZxgcS4FrYcN+auWUTkCitTVZAt82InDKJ7x+QtKu6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
  />
    <title>3almnee</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="/build/assets/jquery.js"></script>
<body>
    @include('layouts.sidebar')
    <script src="/build/assets/function.js"></script>
     <div class="min-h-screen  dark:bg-gray-900">
    @include('layouts.navigation')

@if(session('success'))
    <div id="success-notification" class="alert alert-success text-center mt-5 mb-5 text-white bg-green-500 opacity-70 w-1/4 m-auto absolute right-10 bottom-10 rounded-xl py-3">
      {{ session('success') }}
    </div>
    
    <script>
      setTimeout(function() {
        $('#success-notification').fadeOut('fast');
      }, 2000);
      </script>
@endif
 
    <div class="z-50">
        <div class="m-auto">
              @if ($errors->any())

            <div class="p-4 m-auto text-center bg-gray-100 text-red-500 shadow-xl rounded-xl mt-4 sm:w-3/4 md:w-1/4 mb-3 absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%]" id="Error">
              @error('CourseName') <div class="error">{{$message}}</div>@enderror
              @error('CourseLogo') <div class="error">{{$message}}</div>@enderror
              @error('CourseDesc') <div class="error">{{$message}}</div>@enderror
              @error('CoursePrice') <div class="error">{{$message}}</div>@enderror
              @error('FullQty') <div class="error">{{$message}}</div>@enderror
              @error('State') <div class="error">{{$message}}</div>@enderror
              @error('IsFree') <div class="error">{{$message}}</div>@enderror
              <button class="px-5 py-1 rounded-sm bg-blue-900 text-white mt-4 mb-5" onclick="$('#Error').toggle()">{{__('Ok')}}</button>
              @endif
            </div>
           
  <form action="/Courses/{{$Course->id}}"  method="Post" enctype="multipart/form-data" id="editform" class="mb-4 bg-white w-full md:w-2/4 h-min bg-white p-5 rounded-xl shadow-xl m-auto absolute left-[0%] top-[10%] md:top-[10%] md:left-[25%] text-center fixed">
    @csrf
    @method('PUT')
    <div class="grid grid-cols-2 gap-4">
       <div class="form-group mb-6">
        <label for="CourseLogo" accept="image/*"
         class="bg-blue-500 px-3  py-2 text-white font-bold  block rounded-lg" style="width: 100%">Course Logo</label>
        <input type="file" value="{{$Course->CourseLogo}}" name="CourseLogo" id="CourseLogo" accept="image/*"  class="form-control 
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
        <input type="text" name="CourseName" id="CourseName2" value="{{$Course->CourseName}}" class="form-control
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
      <input type="text" name="CourseDesc" id="CourseDesc2" value="{{$Course->CourseDesc}}" class="form-control block
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
      <input type="url" name="CourseLink" id="CourseLink2" value="{{$Course->CourseLink}}" class="form-control block
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
      <input type="number"  name="CoursePrice" id="CoursePrice2" value="{{$Course->CoursePrice}}" class="form-control block
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
        <select name="CourseType_id" id="CourseType_id2" value="{{$Course->CourseType_id}}" class="form-control 
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
       <option value="" disabled>*</option>  
        <option value="1" {{ $Course->CourseType_id ==1 ? 'selected' :null }}>1</option>  
        <option value="2" {{$Course->CourseType_id ==2 ? 'selected' : null}}>2</option>  
      </select> 
      </div>
    </div>
  
    <div class="form-group mb-6">
      <input type="number" min="10" value="{{$Course->FullQty}}"  name="FullQty" id="FullQty2" class="form-control block
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
        id="IsFree2" {{$Course->IsFree ==1 ? 'checked'  :null}} value="1" onclick="$('#CoursePrice2').toggle()">
      <label class="form-check-label inline-block text-gray-800" for="IsFree">Is Free</label>
    </div>
    
    <div  class="form-group form-check text-center mb-6">
      <input  type="checkbox"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="State2" {{ $Course->State == 1 ? 'checked' : null }} value="1" name="State"> 
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
      ease-in-out"  id="CourseSubmit" >{{__('Edit')}}</button>
  </form>

     
              </div>
              
        </div>
    </div>

</body>
</html>
