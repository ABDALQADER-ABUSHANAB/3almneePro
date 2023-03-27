<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            <Button id="createUser" class="bg-blue-500 text-white text-lg rounded-sm p-2 px-4">{{ __('+') }}</Button>
        </h2>
    </x-slot>
    
    {{-- <Button id="createUser" class="  bg-blue-500 text-white text-lg rounded-sm p-2 px-4 hidden">{{ __('+') }}</Button> --}}

    


    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                </div>
            <div class=" w-3/4 m-auto mb-3  md:grid md:grid-cols-3 block gap-5 text-white text-center m-auto">
                
                <div class="p-4 rounded-sm bg-blue-500 shadow-xl">
                    <h1>Users</h1>
                    <br>
                    
                    <div class="text-white font-bold  border-2  border-2 border-t-yellow-400  border-b-sky-400 border-r-orange-400 border-l-sky-900 rounded-full w-[100px]  h-[100px] p-3 m-auto text-center mt-1">
                        {{Count($Users)}}
                        <p>
                            {{__('Users')}}
                        </p>
                </div>
                </div>
                
                <div class="p-4 rounded-sm bg-pink-500 shadow-xl">
                    <h1> Active Courses</h1>
                    <br>
                    
                    <div class="text-white font-bold  border-2  border-2 border-t-yellow-400  border-b-sky-400 border-r-orange-400 border-l-sky-900 rounded-full w-[100px]  h-[100px] p-3 m-auto text-center mt-1">
                        @if ($ACourses)
                           {{Count($ACourses)}} 
                        @else
                           {{__('0')}}
                        @endif
                        <p>
                            {{__('Courses')}}
                        </p>
                </div>
                </div>
                
                
                <div class="p-4 rounded-sm bg-white text-blue-500  shadow-xl">
                    <h1>UnActive Courses</h1>
                    <br>
                    
                    <div class=" font-bold  border-2 border-t-yellow-400  border-b-sky-400 border-r-orange-400 border-l-sky-900 rounded-full w-[100px]  h-[100px] p-3 m-auto text-center mt-1">
                        {{Count($UnCourses)}}
                        <p>
                            {{__('Courses')}}
                        </p>
                </div>
                </div>
            </div>
            </div>
            {{-- 
                
                --}}
                <section class="bg-white py-16 ">
            
                </section>
                <section>
                    <div class="container">
                        <h1>Users& Courses</h1>
                        <canvas id="myChart"></canvas>
                    </div>
                </section>
                {{-- 
                    
                    
                    --}}
<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto ">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center lg:text-left">
      <style>
        @media (min-width: 992px) {
          .rotate-lg-6 {
            transform: rotate(6deg);
          }
        }
      </style>
  
      
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chartData = @json($chartData);
    
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: chartData
            });
        </script>    
        
    </div>
    <div class="text-center p-2  text-white bg-blue-500 mt-3 font-bold text-xl"><Span>&#169;</Span><span>3almnne Company <span >{{Date('Y')}}</span></span></div> 
    @include('layouts.Forms')
    
</x-app-layout>




