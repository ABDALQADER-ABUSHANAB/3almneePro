<x-app-layout>

  
    <x-slot name="header">    
        
    </x-slot>
     <a class="" value="" id="EditBtn"></a>
    <section class="w-full">
                        
                            <div class=" m-auto p-3 w-11/12">
                              <div id="paginate" class=" w-full md:w-3/4 lg:grid-cols-12 mt-3 text-xs px-2 grid md:grid-cols-8 grid-cols-4 mb-5"></div>
                                <div class=" sm:-mx-6 lg:max-x-full text-sm md:text-sm text-white font-bold font-bold ">
                                  <div class=" p-3">
                                    <div class="overflow-x-auto p-3">
                                      <table class=" text-center feed-in z-30" style="width: -webkit-fill-available">
                                        <thead class=" bg-sky-600 " >
                                            <tr class="rounded-xl">
                                                <th class=" p-3 ">#</th>
                                                <th class=" p-3 ">Name</th>
                                                <th class=" p-3 ">Link</th>
                                                <th class=" p-3 ">Price</th>
                                                <th class=" p-3 ">FQty</th>
                                                <th class=" p-3 ">type</th>
                                                <th class=" p-3 ">Create at</th>
                                                <th class=" p-3 ">update at</th>
                                                <th class=" p-3 ">option</th>
                                                <th class=" p-3 ">State</th>
                                            </tr>            
                                        </thead class="border-b">
                                        <tbody id="tbody" class="text-black">
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                    </section>

                    {{-- <section class="bg-white py-16">
  
                        <div class="container max-w-screen-xl mx-auto px-4">
                
                            <h1 class="font-semibold text-sky-500 text-xl md:text-4xl text-center mb-16">Latest Courses</h1>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8" id="Loadbody">
                              @foreach ($Courses as $Course)
               
                              <div class="px-6 py-4 w-full border-2 border-gray-200 rounded-3xl">
                                @if($Course->CourseLogo != '')
                                   <img src="" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">
                                @else
                                   <img src="/build/assets/images/rr.jfif" alt="Image" class="mb-6 hover:opacity-75 transition ease-in-out duration-500">
                                @endif
                                  <h4 class="font-semibold text-sky-500 text-lg md:text-2xl mb-6">{{$Course->CourseName}}</h4>
                  
                                  <p class="font-light text-gray-400 text-sm md:text-md lg:text-lg mb-10">{{$Course->CourseDesc}}</p>
                  
                                  <div class="flex items-center justify-between mb-8">
                                      <h6 class="font-light text-gray-400 text-sm md:text-lg">{{__('Price :') }}<span class="font-semibold text-gray-900 text-md md:text-lg">{{$Course->CoursePrice}}</span></h6>
                  
                                      <h6 class="font-light text-gray-400 text-sm md:text-lg">{{__('Raised :') }}<span class="font-semibold text-gray-900 text-md md:text-lg">{{$Course->Qty}}</span></h6>
                                  </div>
                  
                                  <div class="hidden md:block lg:flex items-center justify-between mb-8">
                                      
            
                                     @if ($Course->FullQty != 0)
                                        <div class="p-0"><div class= "reltaive left-0 h-1 rounded-xl w-[{{(($Course->Qty/$Course->FullQty ) * 100) }}] bg-blue-500 p-1  text-left"> </div><p class="font-light text-gray-900 text-md">{{$Course->Qty/$Course->FullQty * 100 }} %</p></div>
            
                                     @else    
                                        <div class="p-0"><div class= "reltaive left-0 h-1 rounded-xl w-[{{$Course->Qty}}px] bg-blue-500 p-1  text-left"> </div><p class="font-light text-gray-900 text-md">{{$Course->Qty * 100/100 }} %</p></div>
                                     @endif
                                      
                                  </div>
                                   <div>
                                    <button class="w-min  text-red-500 font-semibold  text-2xl rounded-xl hover:text-red-300 transition ease-in-out duration-500 inline delete" type="button" value="{{$Course->id}}"><i class="fa-solid fa-trash" ></i></button>
                                    <button class="w-min text-blue-500 font-semibold  text-2xl ml-2 rounded-xl hover:text-blue-300 transition ease-in-out duration-500 inline edit"  type="button" value="{{$Course->id}}"><i class="fa-solid fa-pen-to-square" ></i></button>
                                  </div>
                              </div>
                              @endforeach  
                                
                            </div>
                        </div> <!-- container.// -->
                
                      </section>
                                 --}}



    {{-- <script src="/build/assets/function.js"></script>    --}}
    <script>
      
    $(window).on('load',function(){
    loaddata(1);
    });
    </script>
</x-app-layout>



