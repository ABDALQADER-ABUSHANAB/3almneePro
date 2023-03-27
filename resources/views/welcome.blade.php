<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3almnee</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer="" src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
    <style>

    </style>
</head>

<body class="font-body bg-gray-100" style="font-family: apple chancery,cursive">
@vite(['resources/css/app.css','resources/js/app.js'])

    <!-- home section -->
    <section class="bg-white py-10 md:mb-10 p-10 cover bg-white">
        <div class="container max-w-screen-xl mx-auto px-4 bg-white p-5 rounded-xl">
            <nav class="flex-wrap lg:flex items-center" x-data="{navbarOpen:false}">
                <div class="flex items-center mb-10 lg:mb-0">
                    <a href="{{route('Home')}}"><img src="build/assets/images/logo.png" alt="Logo" width="120px" height="120px"></a>

                    <button class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-blue-500 text-blue-500 rounded-md" @click="navbarOpen = !navbarOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </button>
                </div>

                <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-6 xl:space-x-10 hidden" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                    <li class="font-semibold text-sky-500 hover:text-sky-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="{{route('Home')}}">{{__('Home')}}</a>
                    </li>
                    <li class="font-semibold text-sky-500 hover:text-sky-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="{{route('MainCoursesGuest')}}">{{__('Courses')}}</a>
                    </li>
                    <li class="font-semibold text-sky-500 hover:text-sky-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#partner">{{__('Membership')}}</a>
                    </li>

                    <li class="font-semibold text-sky-500 hover:text-sky-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
                      <a href="{{route('Home')}}#Donate">{{__('Donate')}}</a>
                  </li>
                  
                  <li class="font-semibold text-sky-500 hover:text-sky-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="{{route('MasterCoursesGuest')}}">{{__('Other Courses')}}</a>
                  </li>                      
                    <li class="font-semibold text-sky-500 hover:text-sky-800 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#About">{{__('About Us')}}</a>
                    </li>
                </ul>

                <div class="lg:flex flex-col md:flex-row md:items-center text-center md:space-x-6 hidden" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                    <a href="https://api.whatsapp.com/send?phone=962789822724&text=hi%20we%20will%20be%20with%20you%20as%20possible%20as%20we%20can" class="px-6 py-4 bg-blue-500 text-white font-semibold text-lg rounded-xl hover:bg-blue-700 transition ease-in-out duration-500 mb-5 md:mb-0">Join</a>
                </div>
            </nav>

            <div class="flex flex-col lg:flex-row justify-between space-x-20 ">
                <div class="text-center lg:text-left mt-20 md:mt-40 ">
                    <h1 class="font-semibold text-sky-500 text-3xl md:text-6xl leading-normal mb-6">{{__('Bigger Awareness ')}} <br>{{__(' Better World')}} <br>{{__('Better Life ')}}</h1>

                    <p class="font-light text-gray-400 text-md md:text-lg leading-normal mb-12">{{__('We provide a trusted Courses And Services')}}<br>{{__(' worldwide to support people and orgnizations')}}</p>

                    <button class="px-6 py-4 bg-info font-semibold text-white text-lg rounded-xl hover:bg-blue-700 transition ease-in-out duration-500">{{__('Get started')}}</button>
                </div>

                <div class="mt-24 block p-3 relative hidden lg:inline" >
                  <div class="bg-gradient-to-r from-indigo-900 via-blue-900  to-emerald-600   absolute  left-5 top-1 w-[500px] h-[500px] rounded-full z-10 "></div>
                    <img src="build/assets/images/main-logo.png" alt="Image" width="664" height="551" class="z-30 relative">
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- home section //end -->

    <!-- feature section -->
    <section class="py-16 md:mt-10 ">

        <div class="container max-w-screen-xl mx-auto px-4 ">

            <p class="font-light text-gray-500 text-lg md:text-2xl text-center uppercase mb-6" id="lastCourses">{{__('Our features')}}</p>

            <h1 class="font-semibold text-sky-900 text-xl md:text-4xl text-center leading-normal mb-10">{{__('We believe we can save')}} <br> {{__('more life with you')}}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                <div class="text-center feed-in">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-sky-500 mb-6">{{__('Globalism')}}</h4>

                    <p class="font-light text-gray-500 text-md md:text-xl mb-6">{{__('We provide the private trainer to any place and any time')}}</p>

                    <div class="flex justify-center">
                        <a href="https://api.whatsapp.com/send?phone=962789822724&text=hi%20we%20will%20be%20with%20you%20as%20possible%20as%20we%20can" class="flex items-center text-sky-500 gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-white transition ease-linear duration-500">
                            Learn more 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </div>

                <div class="text-center feed-in">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-sky-500 mb-6">{{__('Quick Respone')}}</h4>

                    <p class="font-light text-gray-500 text-md md:text-xl mb-6 ">{{__('The simple and quickest way to ')}} <span class="text-blue-900 font-bold">Contact</span> {{__(' with us')}}</p>

                    <div class="flex justify-center">
                        <a href="https://api.whatsapp.com/send?phone=962789822724&text=hi%20we%20will%20be%20with%20you%20as%20possible%20as%20we%20can" class="flex items-center text-sky-500 gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-white transition ease-linear duration-500">
                            Learn more 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </div>

                <div class="text-center feed-in">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 py-6 flex justify-center bg-blue-200 bg-opacity-30 text-blue-700 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                    </div>

                    <h4 class="font-semibold text-lg md:text-2xl text-sky-500 mb-6">{{__('Real Result')}}</h4>

                    <p class="font-light text-gray-500 text-md md:text-xl mb-6">{{__('We do not offer you just classes and trainers with modest competence, but rather we offer quality experience from several cultures from our location in America to the Middle East')}}</p>

                    <div class="flex justify-center">
                        <a href="https://api.whatsapp.com/send?phone=962789822724&text=hi%20we%20will%20be%20with%20you%20as%20possible%20as%20we%20can" class="flex items-center text-sky-500 gap-5 px-6 py-4 font-semibold text-info text-lg rounded-xl hover:bg-info hover:text-white transition ease-linear duration-500">
                            Learn more 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- Suporet section -->
                      <section class="w-11/12 m-auto">
                          <h1 class="font-light text-gray-500 text-lg md:text-2xl text-center uppercase mb-5" id='partner'>{{__('Our Supporters')}}</h1>
                          <h1 class="font-light text-sky-900 text-lg md:text-4xl text-center uppercase mb-40" id='partner'>{{__('First Class')}}</h1>
                          <div class="mb-20">
                              <div class="max-w-md ml-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-20 feed-in">
                                  <div class="md:flex">
                                    <div class="md:shrink-0 bg-gray-100">
                                      <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{asset('build/assets/images/as-7.jpg')}}" alt="Modern building architecture" >
                                    </div>
                                    <div class="p-8">
                                      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{__('Zarqa Camp Community rehabilitation center')}}</div>
                                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{__('One of the main sponsors')}}</a>
                                      <p class="mt-2 text-slate-500">{{__('These organizations are based on improving the network of communication between all members of society.')}}</p>
                                    </div>
                                  </div>
                                </div>
                                {{--  --}}
                                <div class="max-w-md mr-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-20 feed-in">
                                    <div class="md:flex">
                                      <div class="md:shrink-0 bg-gray-100">
                                        <img class="h-48 w-full object-cover md:h-full md:w-48 bg-white" src="{{asset('build/assets/images/as-1.png')}}" alt="Modern building architecture" >
                                      </div>
                                      <div class="p-8">
                                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{__('Nasmat Hyaa')}}</div>
                                        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{__('One of the main sponsors')}}</a>
                                        <p class="mt-2 text-slate-500">{{__('These organizations are based on improving the network of communication between all members of society.')}}</p>
                                      </div>
                                    </div>
                                  </div>
                                {{--  --}}

                                <div class="max-w-md ml-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-20 feed-in">
                                  <div class="md:flex">
                                    <div class="md:shrink-0 bg-gray-100 flex-2">
                                      <img class="h-48 w-full  md:h-full contain md:w-[240px] bg-white" src="{{asset('build/assets/images/as-2.png')}}" alt="Modern building architecture">
                                    </div>
                                    <div class="p-8">
                                      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{__('America MEPI Company')}}</div>
                                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{__('One of the main sponsors')}}</a>
                                      <p class="mt-2 text-slate-500">{{__('These organizations are based on improving the network of communication between all members of society.')}}</p>
                                    </div>
                                  </div>
                                </div>
                                {{--  --}}
                                <div class="max-w-md mr-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-20 feed-in">
                                  <div class="md:flex">
                                    <div class="md:shrink-0 bg-gray-100">
                                      <img class="h-48 w-full  object-cover md:h-full md:w-48 bg-white" src="{{asset('build/assets/images/as-3.png')}}" alt="Modern building architecture">
                                    </div>
                                    <div class="p-8">
                                      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{__('Athar Group')}}</div>
                                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{__('One of the main sponsors')}}</a>
                                      <p class="mt-2 text-slate-500">{{__('These organizations are based on improving the network of communication between all members of society.')}}</p>
                                    </div>
                                  </div>
                                </div>
                                {{--  --}}
                                <div class="max-w-md ml-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-20 feed-in">
                                  <div class="md:flex">
                                    <div class="md:shrink-0 bg-gray-100 ">
                                      <img class="h-48 w-full  md:h-full contain md:w-[240px] bg-white" src="{{asset('build/assets/images/as-4.png')}}" alt="Modern building architecture">
                                    </div>
                                    <div class="p-8">
                                      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{__('Company retreats')}}</div>
                                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{__('One of the main sponsors')}}</a>
                                      <p class="mt-2 text-slate-500">{{__('These organizations are based on improving the network of communication between all members of society.')}}</p>
                                    </div>
                                  </div>
                                </div>
                          </div>
                  
                      </section>
                  
    <!-- donation section //end -->

    <!-- feature section -->
    <section class="py-16 " id='Donate'>

        <div class="container max-w-screen-xl mx-auto px-4">
            <h1 class="font-light text-gray-500 text-lg md:text-2xl text-center uppercase mb-5">{{__(' donating')}}</h1>
            <h1 class="font-light text-sky-900 text-lg md:text-4xl text-center uppercase mb-40">{{__('You can help lots of people by')}} </h1>
            <div class="flex flex-col lg:flex-row space-x-12 text-center">
              <div class="mt-16 w-2/4">
                <div class="w-3/4">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 1080 1080" viewBox="223.999 144.145 619.367 803.44" width="360" height="360"><path fill="#129dc5" d="M301.352 630.708c-2.9 0-4.427-1.525-5.655-2.752-1.145-1.144-2.05-2.048-3.956-2.048-1.906 0-2.811.905-3.956 2.048-1.228 1.227-2.755 2.752-5.655 2.752-2.895 0-4.42-1.525-5.645-2.752-1.144-1.144-2.048-2.048-3.95-2.048-1.9 0-2.803.903-3.947 2.048-1.225 1.225-2.75 2.752-5.645 2.752-2.895 0-4.419-1.527-5.644-2.752-1.144-1.145-2.047-2.048-3.947-2.048a1.2 1.2 0 0 1 0-2.4c2.895 0 4.419 1.527 5.644 2.752 1.144 1.145 2.047 2.048 3.947 2.048 1.901 0 2.805-.905 3.948-2.048 1.225-1.227 2.748-2.752 5.644-2.752 2.897 0 4.422 1.527 5.647 2.752 1.144 1.145 2.047 2.048 3.948 2.048 1.906 0 2.813-.905 3.958-2.05 1.228-1.225 2.755-2.75 5.653-2.75s4.425 1.525 5.653 2.75c1.145 1.145 2.052 2.05 3.958 2.05a1.2 1.2 0 0 1 0 2.4zM301.352 643.508c-2.9 0-4.427-1.525-5.655-2.752-1.145-1.144-2.05-2.048-3.956-2.048-1.906 0-2.811.905-3.956 2.048-1.228 1.227-2.755 2.752-5.655 2.752-2.895 0-4.42-1.525-5.645-2.752-1.144-1.144-2.048-2.048-3.95-2.048-1.9 0-2.803.903-3.947 2.048-1.225 1.225-2.75 2.752-5.645 2.752-2.895 0-4.419-1.527-5.644-2.752-1.144-1.145-2.047-2.048-3.947-2.048a1.2 1.2 0 1 1 0-2.4c2.895 0 4.419 1.527 5.644 2.752 1.144 1.145 2.047 2.048 3.947 2.048 1.901 0 2.805-.905 3.948-2.048 1.225-1.227 2.748-2.752 5.644-2.752 2.897 0 4.422 1.527 5.647 2.752 1.144 1.145 2.047 2.048 3.948 2.048 1.906 0 2.813-.905 3.958-2.05 1.228-1.225 2.755-2.75 5.653-2.75s4.425 1.525 5.653 2.75c1.145 1.145 2.052 2.05 3.958 2.05a1.2 1.2 0 1 1 0 2.4zM301.352 656.308c-2.9 0-4.427-1.525-5.655-2.752-1.145-1.144-2.05-2.048-3.956-2.048-1.906 0-2.811.905-3.956 2.048-1.228 1.227-2.755 2.752-5.655 2.752-2.895 0-4.42-1.525-5.645-2.752-1.144-1.144-2.048-2.048-3.95-2.048-1.9 0-2.803.903-3.947 2.048-1.225 1.225-2.75 2.752-5.645 2.752-2.895 0-4.419-1.527-5.644-2.752-1.144-1.145-2.047-2.048-3.947-2.048a1.2 1.2 0 1 1 0-2.4c2.895 0 4.419 1.527 5.644 2.752 1.144 1.145 2.047 2.048 3.947 2.048 1.901 0 2.805-.905 3.948-2.048 1.225-1.227 2.748-2.752 5.644-2.752 2.897 0 4.422 1.527 5.647 2.752 1.144 1.145 2.047 2.048 3.948 2.048 1.906 0 2.813-.905 3.958-2.05 1.228-1.225 2.755-2.75 5.653-2.75s4.425 1.525 5.653 2.75c1.145 1.145 2.052 2.05 3.958 2.05a1.2 1.2 0 1 1 0 2.4zM301.352 669.108c-2.9 0-4.427-1.525-5.655-2.752-1.145-1.144-2.05-2.048-3.956-2.048-1.906 0-2.811.905-3.956 2.048-1.228 1.227-2.755 2.752-5.655 2.752-2.895 0-4.42-1.525-5.645-2.752-1.144-1.144-2.048-2.048-3.95-2.048-1.9 0-2.803.903-3.947 2.048-1.225 1.225-2.75 2.752-5.645 2.752-2.895 0-4.419-1.527-5.644-2.752-1.144-1.145-2.047-2.048-3.947-2.048a1.2 1.2 0 1 1 0-2.4c2.895 0 4.419 1.527 5.644 2.752 1.144 1.145 2.047 2.048 3.947 2.048 1.901 0 2.805-.905 3.948-2.048 1.225-1.227 2.748-2.752 5.644-2.752 2.897 0 4.422 1.527 5.647 2.752 1.144 1.145 2.047 2.048 3.948 2.048 1.906 0 2.813-.905 3.958-2.05 1.228-1.225 2.755-2.75 5.653-2.75s4.425 1.525 5.653 2.75c1.145 1.145 2.052 2.05 3.958 2.05a1.2 1.2 0 1 1 0 2.4z" class="colorcdd1df svgShape"></path><circle cx="668.011" cy="453.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="700.011" cy="453.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="732.011" cy="453.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="764.011" cy="453.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="668.011" cy="485.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="700.011" cy="485.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="732.011" cy="485.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="764.011" cy="485.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="668.011" cy="517.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="700.011" cy="517.046" r="4.8" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="732.011" cy="517.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="764.011" cy="517.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="668.011" cy="549.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="700.011" cy="549.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="732.011" cy="549.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><circle cx="764.011" cy="549.046" r="3.2" fill="#129dc5" class="colorcdd1df svgShape"></circle><path fill="#129dc5" d="M815.213 670.925h-19.2c0-19.409-15.791-35.2-35.2-35.2v-19.2c29.997 0 54.4 24.403 54.4 54.4zM380.164 245.162c2.083 1.531 5.072 1.134 8.534.675 5.378-.712 11.82-1.56 18.132 4.009v-2.598c0-6.186-5.014-11.2-11.2-11.2h-16.29c-1.296 3.113-2.057 6.994.824 9.114z" class="colorcdd1df svgShape"></path><path fill="#129dc5" d="M388.845 246.948c-3.702.491-6.905.913-9.344-.883-3.346-2.462-2.713-6.634-1.387-10.017h-4.885c-6.186 0-11.2 5.015-11.2 11.2v12.987c5.442-1.898 17.865-4.841 29.947 2.092 6.971 4 9.917 10.394 11.159 15.582 2.254-2.049 3.694-4.975 3.694-8.261v-18.234c-6.222-5.995-12.655-5.171-17.984-4.466z" class="colorcdd1df svgShape"></path><path fill="#129dc5" d="M377.881 267.196c-5.259-3.104-11.094-2.608-15.851-1.198v3.65c0 6.186 5.014 11.2 11.2 11.2h11.863c-.129-4.799-1.657-10.376-7.212-13.652z" class="colorcdd1df svgShape"></path><path fill="#129dc5" d="M391.42 263.299c-12.027-6.904-24.379-3.695-29.39-1.875v3.425c4.937-1.405 10.955-1.838 16.42 1.381 5.999 3.538 7.629 9.517 7.758 14.618h9.422c2.453 0 4.702-.811 6.547-2.148-1.112-5.046-3.885-11.456-10.757-15.401z" class="colorcdd1df svgShape"></path><path fill="#129dc5" d="M739.48 677.491h11.314v11.314H739.48z" transform="rotate(-45.001 745.133 683.16)" class="colorcdd1df svgShape"></path><path fill="#129dc5" d="M271.694 503.172h11.314v11.314h-11.314z" transform="rotate(-45.001 277.347 508.835)" class="colorcdd1df svgShape"></path><path fill="#197fff" d="M489.454 830.56h172.164v25.506H489.454z" class="colord3d6e2 svgShape"></path><path fill="#197fff" d="M585.101 910.266h-19.129l-9.565-357.082h38.259z" class="colord3d6e2 svgShape"></path><path fill="#1d213a" d="M572.349 911.065a.8.8 0 0 1-.8-.786l-6.377-357.081a.8.8 0 0 1 .786-.814c.38-.069.806.344.814.786l6.377 357.081a.8.8 0 0 1-.786.814h-.014z" class="color1d213a svgShape"></path><path fill="#197fff" d="M492.642 910.266h-19.129l38.259-357.082h38.259z" class="colord3d6e2 svgShape"></path><path fill="#1d213a" d="M481.484 911.065a.802.802 0 0 1-.796-.903l46.23-357.081a.79.79 0 0 1 .897-.691.802.802 0 0 1 .691.897l-46.23 357.081a.799.799 0 0 1-.792.697z" class="color1d213a svgShape"></path><path fill="#197fff" d="M658.43 910.266h19.13l-38.259-357.082h-38.259z" class="colord3d6e2 svgShape"></path><path fill="#1d213a" d="M669.588 911.065a.801.801 0 0 1-.792-.697l-46.23-357.081a.802.802 0 0 1 .691-.897.79.79 0 0 1 .897.691l46.23 357.081a.802.802 0 0 1-.796.903z" class="color1d213a svgShape"></path><path fill="#1d213a" d="M660.024 840.925H491.049a.8.8 0 1 1 0-1.6h168.975a.8.8 0 1 1 0 1.6zM502.907 635.924l35.746-11.948 11.378-70.792h-38.259zM558.129 617.466l35.129-11.741 1.408-52.541h-38.259zM639.301 553.184h-38.259l7.617 47.393 34.485-11.526z" class="color1d213a svgShape"></path><path fill="#197fff" d="M645.677 569.125H505.395a6.376 6.376 0 0 1-6.376-6.377v-6.376c0-8.804 7.137-15.941 15.941-15.941h121.153c8.804 0 15.941 7.137 15.941 15.941v6.376a6.376 6.376 0 0 1-6.377 6.377z" class="colord3d6e2 svgShape"></path><path fill="#1d213a" d="M652.053 560.361H499.019a.8.8 0 1 1 0-1.6h153.034a.8.8 0 1 1 0 1.6zM550.902 282.27a.803.803 0 0 1-.231-.034c-.144-.044-14.322-4.486-14.319-18.303.003-11.564 10.716-22.129 11.172-22.573a.799.799 0 1 1 1.115 1.146c-.106.105-10.684 10.545-10.688 21.427-.003 12.617 12.644 16.608 13.183 16.772a.8.8 0 0 1-.232 1.565z" class="color1d213a svgShape"></path><path fill="#1d213a" d="M584.16 278.811s37.28 1.647 47.907-8.183c10.627-9.83 12.886-27.897-5.447-43.971-14.464-12.682-18.856-22.591-30.829-34.008-11.828-11.277-28.063-14.599-41.636-9.949-16.523 5.66-16.407 17.388-16.407 17.388s-9.698-2.427-12.487 11.956c-3.309 17.058 17.004 23.944 17.004 23.944l41.895 42.823z" class="color1d213a svgShape"></path><path fill="#1d213a" d="M549.904 235.988s-14.101 16.706-9.166 31.651c4.096 12.403 18.579 11.38 31.001 11.276l-21.835-42.927z" class="color1d213a svgShape"></path><path fill="#ffc4a3" d="m499.49 741.29 25.477 88.346-81.361 38.589s-11.758-12.06-9.607-30.093c2.59-21.72 32.148-30.023 32.148-30.023l-17.355-52.917 50.698-13.902zM499.49 360.695l-32.706 72.77-60.352 13.312v37.781h117.966V360.695z" class="colorffc4a3 svgShape"></path><path fill="#f99175" d="M489.579 382.747s5.083 17.224 34.819 22.702v-44.754H499.49l-9.911 22.052z" class="colorf99175 svgShape"></path><path fill="#197fff" d="M535.225 296.399c-11.026 2.524-14.812 12.089-25.572 29.026-10.76 16.938-22.118 32.281-33.676 42.842 0 0 7.041 13.151 24.576 20.723 18.197 7.858 31.882 4.384 31.882 4.384l2.79-96.975z" class="colord3d6e2 svgShape"></path><path fill="#1d213a" d="M387.303 464.28c15.943-7.539 113.522 10.422 113.522 10.422l35.728-.16v67.085h-149.25V464.28z" class="color1d213a svgShape"></path><path fill="#f99175" d="m499.49 741.289-50.698 13.904 10.249 31.248 46.421-24.443z" class="colorf99175 svgShape"></path><path fill="#ffc4a3" d="m383.519 672.344-25.506 92.458-93.793-22.962s-1.557-25.498 13.49-33.231c19.129-9.83 41.779.399 41.779.399l13.435-51.461 50.595 14.797z" class="colorffc4a3 svgShape"></path><path fill="#1d213a" d="m522.207 417.685-21.381 57.017 20.385 6.548s-65.956 39.919-102.09 69.145c-35.956 29.082-34.008 39.853-29.225 88.739 4.135 42.269 20.724 144.4 20.724 144.4l109.197-29.093-34.273-137.094s82.485-38.997 119.957-63.366c36.156-23.513 38.259-33.476 34.672-68.547-3.314-32.408-11.956-67.75-11.956-67.75h-106.01z" class="color1d213a svgShape"></path><path fill="#f99175" d="m324.995 687.917 52.124 7.625 6.4-23.198-50.596-14.796z" class="colorf99175 svgShape"></path><path fill="#2a829c" d="M419.12 551.195a.8.8 0 0 1-.503-1.422c35.761-28.927 101.517-68.808 102.178-69.208a.801.801 0 0 1 .828 1.369c-.659.398-66.323 40.225-102 69.083a.796.796 0 0 1-.503.178z" class="colore8eaef svgShape"></path><path fill="#1d213a" d="M403.047 697.85s26.851-111.632 35.07-153.832c8.219-42.2 5.579-70.938-25.506-79.307-30.188-8.128-45.182 6.495-63.227 51.13-17.477 43.229-51.549 152.518-51.549 152.518l105.212 29.491z" class="color1d213a svgShape"></path><path fill="#2a829c" d="M403.047 698.65a.761.761 0 0 1-.216-.03l-5.817-1.63a.802.802 0 0 1-.555-.986.803.803 0 0 1 .986-.555l5.017 1.406c2.447-10.194 27.114-113.175 34.869-152.991 2.736-14.045 4.036-25.505 3.975-35.031a.8.8 0 0 1 .795-.805h.005a.8.8 0 0 1 .8.795c.061 9.634-1.248 21.195-4.003 35.347-8.128 41.733-34.809 152.748-35.078 153.866a.81.81 0 0 1-.778.614z" class="colore8eaef svgShape"></path><path fill="#197fff" d="M644.776 447.295c-16.34-73.329-3.361-149.368-3.361-149.368s-27.68-6.974-57.836-6.974c-26.834 0-48.355 5.447-48.355 5.447s-6.235 80.319-30.147 136.91c0 0 18.988 14.796 64.154 19.047 49.647 4.672 75.545-5.062 75.545-5.062z" class="colord3d6e2 svgShape"></path><path fill="#1d213a" d="M518.367 394.598a.797.797 0 0 1-.772-1.008c4.73-17.539 8.777-37.091 12.025-58.111a.808.808 0 0 1 .913-.669.8.8 0 0 1 .669.913c-3.258 21.078-7.316 40.688-12.063 58.283a.798.798 0 0 1-.772.592zM693.308 394.969s-11.292 11.757-36.15 13.388c-28.711 1.885-39.848-11.372-39.848-11.372s15.136-17.402 37.999-17.426c26.973-.029 37.999 15.41 37.999 15.41z" class="color1d213a svgShape"></path><path fill="#ffc4a3" d="m599.119 236.381 9.768 55.947s-23.034 22.486-38.658 22.536c-5.911.019-10.953-22.517-10.953-22.517l-.217-55.196 40.06-.77z" class="colorffc4a3 svgShape"></path><path fill="#f99175" d="m566.2 237.014-7.141.137.174 44.319c7.808-.467 11.687-4.166 11.687-4.166l-4.72-40.29z" class="colorf99175 svgShape"></path><path fill="#ffc4a3" d="M580.735 198.061s-35.426-4.568-42.887 17.171c-5.779 16.838 2.444 39.606 12.455 51.956 14.214 17.535 43.15 11.018 45.488-9.706 2.342-20.751-15.056-59.421-15.056-59.421z" class="colorffc4a3 svgShape"></path><path fill="#1d213a" d="M592.049 227.867s-6.974-16.14-16.086-19.042c0 0-8.029 4.814-19.269 3.884-11.24-.93-16.819-9.299-16.819-9.299s15.609-13.882 45.1-9.071l10.607 32.613-3.533.915z" class="color1d213a svgShape"></path><path fill="#ffc4a3" d="m617.311 396.985 2.536 14.803s-49.969 3.187-83.17 5.24c-33.201 2.052-42.156 6.577-50.736 13.012-7.572 5.679-13.55 16.472-14.281 25.041-.57 6.683 6.52 9.008 9.764 4.583 3.57-4.87 2.823-10.096 8.602-15.277 0 0-2.837 5.103-3.089 10.694-.266 5.911 1.196 10.03 3.817 12.255 2.978 2.529 7.409 2.013 8.206-1.574 0 0 3.055 6.256 8.502 4.131 6.147-2.399 2.923-13.284 5.447-17.402 0 0 13.816 4.324 25.24-.133 0 0 54.2 10.096 100.695 10.362 36.668.209 38.471-4.205 38.79-30.554.297-24.562-8.768-58.281-8.768-58.281s-35.626-7.829-51.555 23.1z" class="colorffc4a3 svgShape"></path><path fill="#f99175" d="M674.046 397.475c-2.424-13.324-5.181-23.592-5.181-23.592s-35.625-7.828-51.554 23.101l.644 3.76c0 .001 31.783-16.98 56.091-3.269z" class="colorf99175 svgShape"></path><path fill="#1d213a" d="M502.377 470.319a.793.793 0 0 1-.406-.111c-1.28-.756-2.237-1.836-2.862-2.698-.559.897-1.402 1.556-2.469 1.916-2.028.678-4.542.102-6.403-1.48-2.948-2.505-4.366-6.966-4.098-12.902.098-2.209.58-4.33 1.141-6.113-.963 1.622-1.558 3.258-2.17 4.944-.75 2.064-1.527 4.198-3.039 6.261-1.7 2.32-4.48 3.188-7.089 2.208-2.791-1.047-4.408-3.925-4.117-7.331.763-8.931 7.038-19.942 14.598-25.614 6.292-4.717 12.342-7.903 24.647-10.223a.805.805 0 0 1 .934.638.798.798 0 0 1-.638.934c-13.25 2.498-18.906 6.123-23.984 9.933-7.233 5.425-13.236 15.944-13.964 24.469-.277 3.244 1.412 5.07 3.086 5.697 1.922.727 3.975.069 5.236-1.656 1.378-1.878 2.081-3.813 2.825-5.861 1.131-3.106 2.298-6.32 5.888-9.538a.8.8 0 0 1 1.235.984c-.028.048-2.75 5.013-2.991 10.341-.242 5.423.98 9.438 3.538 11.611 1.442 1.225 3.35 1.689 4.858 1.181.756-.255 1.725-.863 2.048-2.32a.798.798 0 0 1 .686-.62.799.799 0 0 1 .814.441c.011.023 1.125 2.252 3.105 3.422a.8.8 0 0 1-.409 1.487z" class="color1d213a svgShape"></path><path fill="#2a829c" d="M560.465 484.558H356.419a9.564 9.564 0 0 1-9.565-9.565H570.03a9.564 9.564 0 0 1-9.565 9.565z" class="colore8eaef svgShape"></path><path fill="#1d213a" d="M487.136 485.358c-5.714 0-10.364-4.65-10.364-10.364a.8.8 0 1 1 1.6 0c0 4.833 3.931 8.764 8.764 8.764a.8.8 0 1 1 0 1.6z" class="color1d213a svgShape"></path><path fill="#197fff" d="M641.415 297.927c10.911 1.594 17.486 10.162 26.52 33.808 7.602 19.899 16.074 48.089 25.373 63.233 0 0-13.948-10.229-39.189-9.698-21.698.457-36.809 11.714-36.809 11.714s-3.443-29.116 3.691-58.901c7.79-32.523 20.414-40.156 20.414-40.156z" class="colord3d6e2 svgShape"></path><path fill="#1d213a" d="M617.31 397.784a.8.8 0 0 1-.789-.675c-.052-.327-5.025-32.964 4.083-65.178a.801.801 0 0 1 1.541.435c-9.011 31.867-4.094 64.172-4.042 64.494a.8.8 0 0 1-.793.924z" class="color1d213a svgShape"></path><path fill="#2a829c" d="M480.631 478.181H346.338a7.972 7.972 0 0 1-7.608-5.593l-28.194-90.221c-.962-3.079 1.338-6.209 4.565-6.209h134.294a7.972 7.972 0 0 1 7.608 5.593l28.194 90.221c.961 3.08-1.339 6.209-4.566 6.209z" class="colore8eaef svgShape"></path><path fill="#1d213a" d="M475.849 478.981a.8.8 0 1 1 0-1.6c1.28 0 2.45-.592 3.208-1.623a3.947 3.947 0 0 0 .594-3.547l-28.195-90.22a7.136 7.136 0 0 0-6.844-5.033.8.8 0 1 1 0-1.6 8.732 8.732 0 0 1 8.372 6.155l28.195 90.22a5.534 5.534 0 0 1-.833 4.973 5.536 5.536 0 0 1-4.497 2.275z" class="color1d213a svgShape"></path><path fill="#1d213a" d="M480.631 478.981H347.405a.8.8 0 1 1 0-1.6h133.227a4.001 4.001 0 0 0 3.758-2.656.799.799 0 1 1 1.506.538 5.603 5.603 0 0 1-5.265 3.718zM498.959 466.561a.802.802 0 0 1-.772-.589c-2.292-8.402-.249-16.486 2.795-20.769a.801.801 0 0 1 1.114-.189.797.797 0 0 1 .189 1.114c-2.733 3.848-4.698 11.567-2.555 19.422a.8.8 0 0 1-.771 1.011zM638.909 414.514a.803.803 0 0 1-.231-.034c-.081-.024-8.023-2.383-18.795-1.894-.509.055-.816-.322-.834-.762a.797.797 0 0 1 .763-.834c11.08-.505 18.998 1.859 19.33 1.959a.8.8 0 0 1-.233 1.565zM559.856 216.877c-13.853 0-20.625-12.969-20.694-13.105a.801.801 0 0 1 .348-1.076.803.803 0 0 1 1.077.348c.066.131 6.759 12.938 20.433 12.2 13.67-.759 18.023-8.662 18.066-8.741a.8.8 0 0 1 1.417.744c-.188.358-4.763 8.781-19.395 9.594-.424.025-.841.036-1.252.036zM366.921 732.51l-31.159-14.587s1.461-10.959-4.65-13.417c-5.242-2.108-9.723-2.779-9.723-2.779l-1.901 7.282s-22.65-10.229-41.779-.398c-15.047 7.732-13.49 33.231-13.49 33.231l93.793 22.962 8.909-32.294zM516.826 801.404l-28.493 4.727s-5.181-12.554-12.952-9.764c-7.771 2.789-11.775 3.991-11.775 3.991l2.542 7.751S436.59 816.412 434 838.132c-2.151 18.033 9.607 30.093 9.607 30.093l81.361-38.589-8.142-28.232z" class="color1d213a svgShape"></path><path fill="#2a829c" d="m361.766 751.198-96.248-23.91c-1.697 7.684-1.298 14.552-1.298 14.552l93.793 22.962 3.753-13.604zM473.901 840.138l-36.814 17.877c2.862 6.449 6.519 10.209 6.519 10.209l81.361-38.589-3.616-12.54-47.45 23.043zM321.747 717.262a.8.8 0 0 1-.8-.8c0-5.159-1.936-6.811-1.956-6.827a.805.805 0 0 1-.122-1.12.792.792 0 0 1 1.109-.139c.105.08 2.569 2.05 2.569 8.086a.8.8 0 0 1-.8.8zM313.977 715.336a.8.8 0 0 1-.8-.8c0-6.17-3.191-7.73-3.327-7.794a.805.805 0 0 1-.394-1.058.793.793 0 0 1 1.048-.402c.175.077 4.272 1.975 4.272 9.253a.799.799 0 0 1-.799.801zM305.275 714.141c-.016 0-.031 0-.048-.002a.8.8 0 0 1-.75-.847c.361-5.963-3.956-8.028-4-8.049a.804.804 0 0 1-.391-1.063.803.803 0 0 1 1.063-.391c.219.102 5.352 2.558 4.925 9.598a.8.8 0 0 1-.799.754zM474.583 814.37a.798.798 0 0 1-.681-.38c-3.494-5.661-7.458-5.119-7.626-5.092a.81.81 0 0 1-.914-.661.799.799 0 0 1 .652-.917c.208-.033 5.161-.798 9.252 5.83a.801.801 0 0 1-.683 1.22zM466.745 817.897a.799.799 0 0 1-.747-.514c-2.039-5.331-6.919-5.747-7.125-5.761a.8.8 0 0 1 .108-1.597c.247.017 6.098.473 8.511 6.786a.8.8 0 0 1-.747 1.086zM458.928 822.739a.799.799 0 0 1-.744-.508c-2.536-6.444-7.159-6.409-7.219-6.389-.417-.019-.808-.336-.822-.778a.8.8 0 0 1 .778-.822c.237.026 5.806-.084 8.75 7.405a.797.797 0 0 1-.743 1.092z" class="colore8eaef svgShape"></path><path fill="#1d213a" d="M620.442 279.716a.801.801 0 0 1-.053-1.598c.117-.008 11.853-.941 18.32-10.642 6.055-9.081 5.35-21.874-1.794-32.589-3.419-5.128-10.361-10.384-17.073-15.467-6.499-4.92-12.636-9.568-15.606-14.023a.8.8 0 0 1 1.331-.887c2.82 4.23 8.853 8.798 15.241 13.635 6.819 5.163 13.87 10.502 17.439 15.855 7.503 11.255 8.208 24.744 1.794 34.364-6.914 10.37-19.03 11.316-19.542 11.352h-.057z" class="color1d213a svgShape"></path><circle cx="569.221" cy="238.276" r="1.895" fill="#1d213a" class="color1d213a svgShape"></circle><circle cx="545.302" cy="241.933" r="1.895" fill="#1d213a" class="color1d213a svgShape"></circle><path fill="#1d213a" d="M546.096 229.487c-.41.592-2.391 1.034-4.418 1.6-2.039.524-3.974 1.131-4.626.824-.676-.281.953-1.861 4.12-2.712 3.168-.847 5.37-.293 4.924.288zM575.06 226.637c-.726.421-3.404.343-6.183.363-2.78-.02-5.457.058-6.183-.363-.767-.403 1.852-1.402 6.183-1.404 4.33.002 6.949 1.001 6.183 1.404zM570.019 250.235c-6.155 0-11.162-5.007-11.162-11.162 0-6.155 5.008-11.162 11.162-11.162 6.155 0 11.161 5.007 11.161 11.162 0 6.155-5.006 11.162-11.161 11.162zm0-20.723c-5.273 0-9.563 4.289-9.563 9.562s4.289 9.562 9.563 9.562c5.272 0 9.561-4.289 9.561-9.562s-4.289-9.562-9.561-9.562zM543.708 253.892c-5.678 0-10.299-5.007-10.299-11.162 0-6.155 4.62-11.162 10.299-11.162 5.678 0 10.298 5.007 10.298 11.162 0 6.155-4.62 11.162-10.298 11.162zm0-20.723c-4.797 0-8.699 4.289-8.699 9.562s3.902 9.562 8.699 9.562 8.698-4.289 8.698-9.562-3.901-9.562-8.698-9.562z" class="color1d213a svgShape"></path><path fill="#1d213a" d="M577.3 232.502a.797.797 0 0 1-.737-.491.798.798 0 0 1 .428-1.047c.208-.088 20.803-8.733 25.084-10.481 1.933-.788 3.77-.809 5.456-.059 3.391 1.506 4.902 5.594 4.964 5.767a.799.799 0 1 1-1.503.545c-.014-.037-1.352-3.63-4.116-4.853-1.275-.565-2.684-.535-4.197.081-4.273 1.745-24.862 10.388-25.07 10.475a.77.77 0 0 1-.309.063z" class="color1d213a svgShape"></path><path fill="#ffc4a3" d="M589.857 228.384s2.79-6.993 10.661-5.499c7.871 1.494 9.265 12.672 4.881 17.654s-11.283 4.646-11.283 4.646l-4.259-16.801z" class="colorffc4a3 svgShape"></path><path fill="#1d213a" d="M594.341 235.242a.8.8 0 0 1-.769-1.02c1.706-5.983 6.597-6.06 6.645-6.06h.001a.8.8 0 0 1 .006 1.6c-.164.002-3.752.118-5.116 4.899a.797.797 0 0 1-.767.581zM552.599 239.87a.797.797 0 0 1-.578-1.352c.119-.125 3.003-3.048 7.961-1.288a.801.801 0 0 1-.535 1.508c-3.952-1.398-6.184.799-6.277.892a.799.799 0 0 1-.571.24z" class="color1d213a svgShape"></path><path fill="#ffc4a3" d="m555.715 240.418.441 4.586s-4.009-.015-4.009 2.835c0 2.989 4.426 4.217 7.511 1.629" class="colorffc4a3 svgShape"></path><path fill="#f99175" d="M555.908 251.673c-.864 0-1.663-.18-2.313-.483-1.409-.657-2.25-1.909-2.25-3.35 0-.887.317-1.671.917-2.27.876-.873 2.161-1.189 3.017-1.302l-.362-3.773a.801.801 0 0 1 1.593-.153l.441 4.586a.811.811 0 0 1-.205.614.805.805 0 0 1-.594.262c-.131 0-3.208.025-3.208 2.035 0 1.115.831 1.669 1.326 1.9 1.227.571 3.202.516 4.87-.884a.8.8 0 0 1 1.028 1.226c-1.354 1.138-2.888 1.592-4.26 1.592z" class="colorf99175 svgShape"></path><circle cx="391.489" cy="430.358" r="7.971" fill="#66ccff" transform="rotate(-45.001 391.486 430.364)" class="colorf3f4f7 svgShape"></circle><path fill="#1d213a" d="M566.066 254.794c-3.032 1.105-4.978-.653-6.179 1.431-1.393 2.418 3.11 7.081 8.242 4.764 4.394-1.983 4.424-7.61 2.186-8.094-1.704-.368-2.339 1.203-4.249 1.899z" class="color1d213a svgShape"></path><path fill="#ff5a5a" d="M564.689 261.56a6.63 6.63 0 0 0 3.44-.571c2.753-1.242 3.791-3.914 3.634-5.856-.597-.068-1.206-.083-1.828.027-3.136.553-5.307 3.313-5.246 6.4z" class="colorff5a5a svgShape"></path><path fill="#2a829c" d="M571.918 255.267c-.063-1.259-.588-2.257-1.481-2.45-1.748-.378-2.4 1.234-4.359 1.949-3.11 1.134-5.107-.67-6.339 1.468-.358.621-.336 1.386-.021 2.146 1.465.362 3.423.538 5.841-.042 2.957-.71 5.044-2.016 6.359-3.071z" class="colore8eaef svgShape"></path><path fill="#1d213a" d="M538.147 453.156a.8.8 0 0 1-.345-1.522c4.995-2.394 5.316-7.331 5.327-7.541.022-.439.353-.756.839-.758.441.024.78.395.758.836-.011.248-.355 6.089-6.233 8.906a.79.79 0 0 1-.346.079z" class="color1d213a svgShape"></path></svg>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 feed-in">
                  <div class="mb-5 md:mb-0">
                      <div class="w-20 py-6 flex justify-center bg-yellow-500 bg-opacity-5 rounded-xl mb-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-yellow-500"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                      </div>
  
                      <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">{{__('1200+')}}</h3>
  
                      <p class="font-light text-gray-400 text-md md:text-lg">{{__('Our volunteer around the ')}}<br> {{__('world')}}</p>
                  </div>

                  <div>
                      <div class="w-20 py-6 flex justify-center bg-green-500 bg-opacity-5 rounded-xl mb-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-green-500"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                      </div>
  
                      <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">{{__('98%')}}</h3>
  
                      <p class="font-light text-gray-400 text-md md:text-lg">{{__('Positive review from')}} <br>{{__(' public')}}</p>
                  </div>
              </div>
            </div>
              <div class="mt-16 ">
                  
                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-50 mb-16 feed-in">
                        <div class="mb-5 md:mb-0">
                            <div class="w-20 py-6 flex justify-center bg-info bg-opacity-5 rounded-xl mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun text-info"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                            </div>
        
                            <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">{{__('10000+')}}</h3>
        
                            <p class="font-light text-gray-400 text-md md:text-lg">{{__('Fundraising campaign in')}} <br>{{__(' all time')}}</p>
                        </div>
        
                        <div>
                            <div class="w-20 py-6 flex justify-center bg-red-500 bg-opacity-5 rounded-xl mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-red-500"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            </div>
        
                            <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">{{__('$120M+')}}</h3>
                            
                            <p class="font-light text-gray-400 text-md md:text-lg">{{__('Raised and counting')}}<br>{{__(' donations in all time')}}</p>
                          </div>
                      </div>
                      <div class="flex">
                          <div>
                              {{-- <img src="/build/assets/images/point.webp" alt=""> --}}
                              <svg id="SvgjsSvg1001" width="360" height="360" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1002"></defs><g id="SvgjsG1008"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 1080 1080" viewBox="253.044 268.931 562.598 530.697" width="360" height="360"><circle cx="355.782" cy="422.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="387.782" cy="422.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="419.782" cy="422.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="451.782" cy="422.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="355.782" cy="454.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="387.782" cy="454.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="419.782" cy="454.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="451.782" cy="454.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="355.782" cy="486.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="387.782" cy="486.716" r="4.8" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="419.782" cy="486.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="451.782" cy="486.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="355.782" cy="518.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="387.782" cy="518.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="419.782" cy="518.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><circle cx="451.782" cy="518.716" r="3.2" fill="#567cff" class="colorcdd1df svgShape"></circle><path fill="#567cff" d="M788.871 517.844c-2.898 0-4.425-1.525-5.653-2.751-1.145-1.145-2.052-2.049-3.958-2.049-1.906 0-2.811.904-3.956 2.049-1.227 1.226-2.755 2.751-5.653 2.751-2.897 0-4.422-1.526-5.647-2.752-1.144-1.144-2.047-2.048-3.948-2.048-1.902 0-2.805.904-3.949 2.048-1.225 1.226-2.748 2.752-5.644 2.752s-4.42-1.526-5.645-2.752c-1.144-1.144-2.047-2.048-3.947-2.048a1.201 1.201 0 0 1 0-2.4c2.895 0 4.419 1.526 5.644 2.752 1.144 1.145 2.047 2.048 3.948 2.048 1.9 0 2.803-.904 3.947-2.048 1.225-1.227 2.75-2.752 5.645-2.752 2.895 0 4.42 1.526 5.645 2.752 1.144 1.145 2.048 2.048 3.95 2.048 1.906 0 2.811-.904 3.956-2.049 1.227-1.226 2.755-2.751 5.653-2.751 2.9 0 4.427 1.526 5.655 2.752 1.145 1.145 2.05 2.048 3.956 2.048a1.2 1.2 0 0 1 .001 2.4zM788.871 530.644c-2.898 0-4.425-1.525-5.653-2.751-1.145-1.145-2.052-2.049-3.958-2.049-1.906 0-2.811.904-3.956 2.049-1.227 1.226-2.755 2.751-5.653 2.751-2.897 0-4.422-1.526-5.647-2.752-1.144-1.144-2.047-2.048-3.948-2.048-1.902 0-2.805.904-3.949 2.048-1.225 1.226-2.748 2.752-5.644 2.752s-4.42-1.526-5.645-2.752c-1.144-1.144-2.047-2.048-3.947-2.048a1.201 1.201 0 0 1 0-2.4c2.895 0 4.419 1.526 5.644 2.752 1.144 1.145 2.047 2.048 3.948 2.048 1.9 0 2.803-.904 3.947-2.048 1.225-1.227 2.75-2.752 5.645-2.752 2.895 0 4.42 1.526 5.645 2.752 1.144 1.145 2.048 2.048 3.95 2.048 1.906 0 2.811-.904 3.956-2.049 1.227-1.226 2.755-2.751 5.653-2.751 2.9 0 4.427 1.526 5.655 2.752 1.145 1.145 2.05 2.048 3.956 2.048a1.2 1.2 0 0 1 .001 2.4zM788.871 543.444c-2.898 0-4.425-1.525-5.653-2.751-1.145-1.144-2.052-2.049-3.958-2.049-1.906 0-2.811.904-3.956 2.049-1.227 1.226-2.755 2.751-5.653 2.751-2.897 0-4.422-1.526-5.647-2.752-1.144-1.144-2.047-2.048-3.948-2.048-1.902 0-2.805.904-3.949 2.048-1.225 1.226-2.748 2.752-5.644 2.752s-4.42-1.526-5.645-2.752c-1.144-1.144-2.047-2.048-3.947-2.048a1.2 1.2 0 0 1 0-2.4c2.895 0 4.419 1.526 5.644 2.752 1.144 1.145 2.047 2.049 3.948 2.049 1.9 0 2.803-.904 3.947-2.048 1.225-1.227 2.75-2.752 5.645-2.752 2.895 0 4.42 1.526 5.645 2.752 1.144 1.145 2.048 2.049 3.95 2.049 1.906 0 2.811-.904 3.956-2.049 1.227-1.226 2.755-2.751 5.653-2.751 2.9 0 4.427 1.526 5.655 2.752 1.145 1.145 2.05 2.049 3.956 2.049a1.2 1.2 0 0 1 .001 2.397zM788.871 556.244c-2.898 0-4.425-1.525-5.653-2.751-1.145-1.144-2.052-2.049-3.958-2.049-1.906 0-2.811.904-3.956 2.049-1.227 1.226-2.755 2.751-5.653 2.751-2.897 0-4.422-1.526-5.647-2.752-1.144-1.144-2.047-2.048-3.948-2.048-1.902 0-2.805.904-3.949 2.048-1.225 1.226-2.748 2.752-5.644 2.752s-4.42-1.526-5.645-2.752c-1.144-1.144-2.047-2.048-3.947-2.048a1.2 1.2 0 0 1 0-2.4c2.895 0 4.419 1.526 5.644 2.751 1.144 1.145 2.047 2.049 3.948 2.049 1.9 0 2.803-.904 3.947-2.048 1.225-1.227 2.75-2.752 5.645-2.752 2.895 0 4.42 1.526 5.645 2.751 1.144 1.145 2.048 2.049 3.95 2.049 1.906 0 2.811-.904 3.956-2.049 1.227-1.226 2.755-2.751 5.653-2.751 2.9 0 4.427 1.526 5.655 2.751 1.145 1.145 2.05 2.049 3.956 2.049a1.2 1.2 0 0 1 .001 2.4zM333.017 596.398c-29.997 0-54.4-24.404-54.4-54.4h19.2c0 19.409 15.791 35.2 35.2 35.2v19.2z" class="colorcdd1df svgShape"></path><path fill="#567cff" d="M306.028 379.326h11.314v11.314h-11.314z" transform="rotate(-45.001 311.682 384.988)" class="colorcdd1df svgShape"></path><path fill="#567cff" d="M775.215 761.849h11.314v11.314h-11.314z" transform="rotate(-45.001 780.866 767.519)" class="colorcdd1df svgShape"></path><path fill="#567cff" d="M610.104 337.368c2.083 1.531 5.072 1.134 8.534.675 5.378-.712 11.82-1.56 18.131 4.009v-2.598c0-6.186-5.014-11.2-11.2-11.2h-16.29c-1.295 3.113-2.057 6.994.825 9.114z" class="colorcdd1df svgShape"></path><path fill="#567cff" d="M618.785 339.154c-3.702.491-6.905.913-9.344-.883-3.346-2.462-2.713-6.634-1.387-10.017h-4.885c-6.186 0-11.2 5.014-11.2 11.2v12.987c5.442-1.898 17.865-4.841 29.947 2.092 6.971 4 9.917 10.394 11.159 15.582 2.254-2.049 3.694-4.975 3.694-8.261V343.62c-6.222-5.995-12.655-5.171-17.984-4.466z" class="colorcdd1df svgShape"></path><path fill="#567cff" d="M607.821 359.402c-5.259-3.104-11.094-2.608-15.851-1.198v3.65c0 6.186 5.014 11.2 11.2 11.2h11.863c-.129-4.799-1.658-10.376-7.212-13.652z" class="colorcdd1df svgShape"></path><path fill="#567cff" d="M621.36 355.505c-12.027-6.904-24.379-3.695-29.39-1.875v3.425c4.938-1.405 10.956-1.838 16.42 1.381 5.999 3.538 7.629 9.517 7.758 14.618h9.422c2.453 0 4.702-.811 6.547-2.148-1.112-5.046-3.885-11.456-10.757-15.401z" class="colorcdd1df svgShape"></path><path fill="#f9c587" d="m490.887 393.251 7.125 56.092s13.916 10.91 35.38 3.516c16.697-5.752 16.697-16.813 16.697-16.813l-15.937-52.751-43.265 9.956zM583.205 430.178c27.565-4.558 86.492-14.562 86.492-14.562s21.544-79.257 32.614-92.443c8.569-10.207 23.848-19.941 29.573-15.085 0 0 13.101-10.858 20.321-14.217 7-3.256 11.802 3.853 6.484 10.093-4.173 4.897-14.949 13.837-14.949 13.837s7.737.095 5.946 9.862c0 0 5.53 1.94 4.554 9.591-.817 6.398-5.698 12.453-9.93 12.075-2.684-.24-3.744-2.145-3.744-2.145s-3.256 6.484-12.155 8.98c0 0-.311 47.36-4.124 71.192-3.907 24.418-5.849 27.832-33.643 39.72-53.285 22.79-107.439 26.371-107.439 26.371v-63.269z" class="colorffc4a3 svgShape"></path><path fill="#364f6b" d="M366.65 638.812c17.412-19.693 86.759-30.437 123.224-29.46 0 0 1.953-15.302 7.814-31.906l108.416-.977v85.3L366.65 659.49v-20.678z" class="color1d213a svgShape"></path><path fill="#0056ff" d="M531.981 440.162c28.216-6.946 51.223-9.984 51.223-9.984s15.41 96.804 36.594 145.552c0 0-18.253 19.621-70.275 24.18-45.319 3.971-69.417-5.86-69.417-5.86s5.3-70.132-7.289-136.549c0 0 21.849-8.153 59.164-17.339z" class="colord3d6e2 svgShape"></path><path fill="#364f6b" d="M667.879 487.939c-24.661 6.16-58.032 43.275-86.845 130.529l-53.068.326v101.253s25.395 2.93 69.347 2.93c39.394 0 53.72-21.772 69.347-81.698 15.628-59.926 25.069-102.902 25.069-102.902l-23.85-50.438z" class="color1d213a svgShape"></path><path fill="#02262d" d="M581.034 619.268a.8.8 0 0 1-.76-1.051c3.161-9.569 6.47-18.809 9.836-27.462a.796.796 0 0 1 1.036-.455c.411.16.616.623.455 1.035-3.356 8.627-6.655 17.841-9.808 27.384a.8.8 0 0 1-.759.549z" class="colore8eaef svgShape"></path><ellipse cx="539.871" cy="696.298" fill="#364f6b" rx="21.305" ry="44.552" transform="rotate(-12.516 539.725 696.151)" class="color1d213a svgShape"></ellipse><path fill="#02262d" d="M547.304 740.833c-11.338 0-23.955-16.953-29.014-39.746-5.417-24.413-.142-46.424 11.756-49.064 11.892-2.648 25.986 15.073 31.406 39.485 5.417 24.413.144 46.423-11.755 49.064a11.02 11.02 0 0 1-2.393.261zm-14.773-87.48c-.72 0-1.433.076-2.138.233-11.038 2.449-15.767 23.603-10.541 47.155 5.228 23.552 18.458 40.709 29.499 38.27 11.037-2.449 15.766-23.603 10.539-47.155-4.894-22.049-16.803-38.503-27.359-38.503z" class="colore8eaef svgShape"></path><path fill="#f9c587" d="m512.99 667.94 86.928 15.628 31.528 68.47s-11.668 11.927-30.877 7.043c-20.816-5.292-31.898-35.58-31.898-35.58l-55.681-8.84V667.94z" class="colorffc4a3 svgShape"></path><path fill="#000000" d="m527.966 670.632-14.976-2.692v46.72l24.642 3.912c-.001-.001-6.452-7.016-10.028-23.148-3.63-16.376.362-24.792.362-24.792z" class="colorf99175 svgShape"></path><path fill="#364f6b" d="M548.081 740.008c-16.044 1.405-100.425-17.341-140.238-32.44-41.245-15.639-52.103-32.115-48.187-54.993 4.349-25.471 32.818-22.365 63.637-18.448 30.576 3.889 108.339 18.232 109.528 18.448a9.364 9.364 0 0 0-2.593.216c-11.506 2.566-16.476 24.093-11.155 48.133 5.104 23.012 17.853 39.975 29.008 39.084z" class="color1d213a svgShape"></path><path fill="#02262d" d="M547.257 740.84c-11.37.002-23.952-17.139-28.966-39.743-5.22-23.582-.822-44.217 9.994-48.541-19.525-3.566-79.151-14.337-105.094-17.637-6.736-.856-13.295-1.663-19.472-2.148a.8.8 0 0 1 .125-1.595c6.213.488 12.792 1.298 19.549 2.156 28.166 3.584 95.916 15.947 109.211 18.389l.361.066a.8.8 0 0 1-.194 1.586 8.46 8.46 0 0 0-2.374.199c-11.026 2.459-15.758 23.623-10.544 47.179 4.977 22.429 17.364 39.334 28.163 38.459.436-.022.827.293.861.734a.799.799 0 0 1-.733.862c-.295.022-.592.034-.887.034z" class="colore8eaef svgShape"></path><path fill="#f9c587" d="M506.917 730.149c-3.7 6.833-11.128 2.701-11.128 2.701s-.702 2.674-4.214 4.457c-4.619 2.35-9.184-.324-9.184-.324s-4.889 5.861-13.019 3.106c-8.157-2.755-12.938-16.342-9.129-20.042 2.863-2.782 6.833 0 6.833 0-3.889-15.639-2.269-31.575-2.269-31.575s-40.057-50.807-47.863-64.474c-7.806-13.667-13.019-25.714-8.778-39.381 2.053-6.618 7.698-22.095 14.262-39.111l54.156 24.282c-3.106 13.451-6.023 22.311-6.023 22.311s19.096 42.326 27.551 68.58c8.454 26.28 12.965 61.772 8.805 69.47z" class="colorffc4a3 svgShape"></path><path fill="#000000" d="M487.322 631.509a911.368 911.368 0 0 0-1.861-4.599c-6.393-2.378-17.853-4.814-31.248.734-11.259 4.664-17.179 13.789-20.196 20.748 2.095 2.81 4.25 5.675 6.407 8.522.002-.011 2.424-12.054 16.474-20.378 14.057-8.329 30.424-5.027 30.424-5.027z" class="colorf99175 svgShape"></path><path fill="#0056ff" d="M483.579 506.579c-1.395-35.153-10.762-49.079-10.762-49.079-12.571 4.692-18.106 12.18-29.501 37.249-11.395 25.069-30.929 76.184-35.162 89.858-4.232 13.674.977 25.72 8.79 39.394 3.08 5.391 11.173 16.552 19.843 28.093h.001s4.828-17.287 22.264-22.884c17.581-5.643 28.269 2.297 28.269 2.297-8.199-20.427-16.765-39.413-16.765-39.413s14.651-44.493 13.023-85.515z" class="colord3d6e2 svgShape"></path><path fill="#000000" d="M678.774 384.286c3.863 5.222 11.363 12.021 25.327 14.951 9.272 1.945 17.09 1.208 22.904-.184.239-4.036.438-8.073.603-11.976-.011.008-5.122 3.886-20.806 2.368-15.699-1.519-25.94-11.938-25.941-11.939-.717 2.301-1.412 4.563-2.087 6.78z" class="colorf99175 svgShape"></path><path fill="#364f6b" d="M481.118 546.514a.798.798 0 0 1-.792-.918c2.092-14.172 2.919-27.289 2.453-38.986-.233-5.913-.714-11.613-1.427-16.942a.8.8 0 0 1 .686-.899.808.808 0 0 1 .898.687c.72 5.378 1.205 11.128 1.442 17.091.467 11.796-.364 25.013-2.47 39.284a.8.8 0 0 1-.79.683z" class="color1d213a svgShape"></path><path fill="#0056ff" d="M724.286 427.356c1.475-9.217 2.424-21.95 3.035-34.105-.015.01-10.861 7.295-27.996 1.113-14.605-5.269-18.458-16.838-18.465-16.859-6.295 20.203-11.164 38.109-11.164 38.109s-58.926 10.004-86.492 14.562v63.27s54.154-3.581 107.439-26.371c27.795-11.886 29.736-15.301 33.643-39.719z" class="colord3d6e2 svgShape"></path><path fill="#364f6b" d="M595.201 493.003a.801.801 0 0 1-.781-.627 1170.66 1170.66 0 0 1-7.141-34.726.8.8 0 1 1 1.572-.298 1171.22 1171.22 0 0 0 7.131 34.677.802.802 0 0 1-.781.974z" class="color1d213a svgShape"></path><path fill="#f9c587" d="m679.357 649.831 16.496 80.959h74.99s2.279-12.534-5.209-22.79c-8.305-11.374-28.633-11.744-28.633-11.744l-7.831-46.425h-49.813z" class="colorffc4a3 svgShape"></path><path fill="#364f6b" d="M720.542 345.054a.799.799 0 0 1-.604-1.323c6.952-8.044 6.267-21.123 6.259-21.254a.798.798 0 0 1 .67-.835.804.804 0 0 1 .902.583c.011.043 1.198 4.288 5.942 6.923 2.045 1.138 4.05 1.144 5.503.024 1.536-1.187 2.1-3.441 1.472-5.881-.93-3.617-5.57-10.866-9.367-14.634a.8.8 0 0 1 1.128-1.136c4.026 3.998 8.784 11.468 9.789 15.372.789 3.07.006 5.962-2.045 7.546-1.95 1.507-4.662 1.55-7.258.108-2.525-1.402-4.148-3.194-5.166-4.718-.245 4.635-1.448 12.966-6.62 18.949a.798.798 0 0 1-.605.276z" class="color1d213a svgShape"></path><path fill="#364f6b" d="M737.201 342.273c-1.495 0-2.808-.562-3.742-1.653-1.555-1.816-2.134-5.522.906-10.475a.8.8 0 1 1 1.362.838c-2.591 4.22-2.242 7.208-1.053 8.597 1.023 1.197 2.803 1.418 4.769.599 4.578-1.913 8.114-6.657 9.461-12.69a.793.793 0 0 1 .956-.606.8.8 0 0 1 .606.955c-1.459 6.539-5.35 11.705-10.408 13.818-.99.413-1.957.617-2.857.617z" class="color1d213a svgShape"></path><path fill="#364f6b" d="M740.565 347.984a.8.8 0 0 1-.697-.406c-1.897-3.359-.38-6.482.689-7.664a.8.8 0 0 1 1.19 1.069c-.094.106-2.28 2.63-.484 5.807a.802.802 0 0 1-.698 1.194zM470.773 732.458a.8.8 0 0 1-.716-.442c-.086-.172-2.125-4.299-3.755-11.799a.8.8 0 1 1 1.563-.34c1.584 7.284 3.603 11.384 3.623 11.425a.801.801 0 0 1-.715 1.156zM482.385 737.776a.8.8 0 0 1-.63-1.294c3.314-4.217 2.025-11.77 2.013-11.846a.799.799 0 1 1 1.575-.28c.061.338 1.431 8.331-2.328 13.116a.805.805 0 0 1-.63.304zM495.787 733.638a.8.8 0 0 1-.727-1.136c2.089-4.516.883-10.027.87-10.082a.799.799 0 1 1 1.559-.351c.056.247 1.337 6.102-.977 11.106a.8.8 0 0 1-.725.463z" class="color1d213a svgShape"></path><path fill="#0056ff" d="m496.005 433.542-.378-2.972 2.385 18.773s13.916 10.91 35.38 3.516c16.697-5.752 16.697-16.813 16.697-16.813l-4.321-14.301-49.763 11.797z" class="colord3d6e2 svgShape"></path><path fill="#364f6b" d="M518.646 456.229c-12.997 0-20.8-6-21.128-6.256a.8.8 0 0 1 .986-1.261c.077.059 7.727 5.916 20.147 5.916.053.001.12.022.158 0a.8.8 0 0 1 .8.797c.003.498-.461.81-.963.804zM666.335 430.979a.8.8 0 0 1-.794-.916c.028-.184.691-4.612 3.381-14.654a.802.802 0 0 1 1.547.414c-2.664 9.933-3.338 14.427-3.344 14.472a.8.8 0 0 1-.79.684z" class="color1d213a svgShape"></path><path fill="#000000" d="M729.17 649.831h-49.813l3.222 15.813 50.372 6.603z" class="colorf99175 svgShape"></path><path fill="#364f6b" d="M470.556 592.896a.8.8 0 0 1-.727-.466c-6.906-15.068-15.78-18.211-15.869-18.241a.801.801 0 0 1-.505-1.012.801.801 0 0 1 1.009-.506c.387.128 9.594 3.33 16.817 19.092a.8.8 0 0 1-.725 1.133zM671.326 661.552h87.145s-23.116-116.664-47.208-154.104c-24.045-37.368-65.258-21.252-63.848 14.635 1.664 42.34 23.911 139.469 23.911 139.469z" class="color1d213a svgShape"></path><path fill="#02262d" d="M666.86 642.036a.8.8 0 0 1-.781-.633c-4.806-22.481-13.461-64.93-17.423-96.659a.8.8 0 1 1 1.587-.198c3.955 31.669 12.6 74.068 17.401 96.523a.8.8 0 0 1-.784.967z" class="colore8eaef svgShape"></path><path fill="#000000" d="M526.357 421.609s8.258 2.781 19.411.137l-11.617-38.45-16.843 3.876 9.049 34.437z" class="colorf99175 svgShape"></path><path fill="#364f6b" d="m531.9 358.181-43.495 32.765c-13.479 3.566-20.398-.604-21.171-5.119-1.043-6.098 3.305-7.28 4.919-14.021s-1.627-15.75 2.443-21.256c5.047-6.827 13.325-3.229 13.325-3.229s-.754-12.423 6.931-15.752c8.975-3.887 22.583-4.023 34.775 7.925 9.646 9.454 12.982 14.975 18.392 14.619.001 0-1.346 10.782-16.119 4.068z" class="color1d213a svgShape"></path><path fill="#f9c587" d="M483.887 371.573s7.595-13.057 26.348-16.75c19.505-3.841 29.002 8.467 33.169 23.554 4.167 15.087 4.093 37.01-13.802 42.412-17.806 5.375-38.099-2.557-45.715-49.216z" class="colorffc4a3 svgShape"></path><path fill="#364f6b" d="M483.862 388.404s9.358-.814 9.567-8.469c.209-7.655-5.761-13.294-5.484-21.924l-8.137 11.344 4.054 19.049zM502.706 347.62c8.708 6.157 10.302 12.955 16.799 18.062 7.733 6.078 26.875.229 28.515-11.569 0 0-5.38 8.161-19.285-1.843-13.905-10.003-26.029-4.65-26.029-4.65z" class="color1d213a svgShape"></path><path fill="#02262d" d="M512.992 612.471a.796.796 0 0 1-.13-.01 189.356 189.356 0 0 0-23.019-2.31.8.8 0 0 1-.769-.831c.017-.44.3-.809.831-.768a191.052 191.052 0 0 1 23.212 2.329.799.799 0 0 1 .661.919.797.797 0 0 1-.786.671z" class="colore8eaef svgShape"></path><path fill="#0056ff" d="m737.001 696.256-1.249-7.402h-10.489c-6.926 0-5.35 9.918-5.35 9.918l-29.946 3.131 5.886 28.887h74.99s2.279-12.534-5.209-22.79c-8.305-11.374-28.633-11.744-28.633-11.744zM631.445 752.037l-31.528-68.47-31.038-5.58v24.442c-5.74.169-10.129 3.545-8.778 10.804 1.351 7.259 1.63 9.011 1.63 9.011l-.057.145 6.996 1.111s11.082 30.288 31.898 35.58c19.209 4.883 30.877-7.043 30.877-7.043z" class="colord3d6e2 svgShape"></path><path fill="#364f6b" d="M770.592 720.621h-76.973a.8.8 0 1 1 0-1.6h76.973a.8.8 0 1 1 0 1.6zM621.699 758.806a.796.796 0 0 1-.725-.463l-35.755-76.951a.8.8 0 0 1 1.451-.675l35.755 76.951a.8.8 0 0 1-.726 1.138zM485.71 389.204a.8.8 0 0 1-.006-1.6c4.127-.029 6.998-1.376 8.303-3.897 1.778-3.434.648-8.923-2.876-13.984-6.309-9.059-4.661-13.427-4.587-13.608a.8.8 0 0 1 1.487.588c-.034.1-1.267 3.949 4.413 12.105 3.861 5.542 5.033 11.679 2.984 15.634-1.112 2.148-3.7 4.72-9.711 4.761l-.007.001z" class="color1d213a svgShape"></path><path fill="#f9c587" d="M491.224 388.151s-7.038-5.164-12.514-1.522c-6.347 4.221-5.018 14.722 2.885 17.717 7.746 2.935 12.569-3.799 12.569-3.799l-2.94-12.396z" class="colorffc4a3 svgShape"></path><path fill="#364f6b" d="M479.567 394.007a.798.798 0 0 1-.586-1.344c1.577-1.699 4.925-2.576 8.031-.856a.8.8 0 0 1-.774 1.4c-2.303-1.277-4.902-.727-6.084.545a.805.805 0 0 1-.587.255zM464.89 379.385a.801.801 0 0 1-.414-1.486c.178-.108 4.373-2.739 4.792-10.163.445-7.919 1.055-18.738 11.781-20.9a.8.8 0 0 1 .315 1.569c-9.514 1.917-10.059 11.613-10.498 19.402-.47 8.339-5.361 11.342-5.569 11.466a.8.8 0 0 1-.407.112zM548.37 350.911a.89.89 0 0 1-.073-.003c-4.392-.395-8.561-4.48-13.386-9.21-3.877-3.799-7.884-7.727-12.425-10.124-10.063-5.313-25.611-2.657-29.711 5.069a.799.799 0 1 1-1.412-.75c4.544-8.565 20.923-11.511 31.87-5.735 4.747 2.507 9.023 6.698 12.797 10.398 4.416 4.327 8.588 8.416 12.411 8.759a.8.8 0 0 1-.071 1.596z" class="color1d213a svgShape"></path><circle cx="535.904" cy="373.759" r="2.026" fill="#364f6b" class="color1d213a svgShape"></circle><path fill="#364f6b" d="M514.071 381.945a2.026 2.026 0 1 1-4.052 0 2.026 2.026 0 0 1 4.052 0z" class="color1d213a svgShape"></path><path fill="#000000" d="M530.299 389.311c-.847 0-1.766-.163-2.731-.533a.8.8 0 0 1-.461-1.034.803.803 0 0 1 1.033-.46c2.569.981 4.625.114 5.523-1.186.62-.897.617-1.853-.008-2.558-1.316-1.484-3.3.176-3.386.247a.796.796 0 0 1-1.2-.192l-2.723-4.465a.8.8 0 1 1 1.366-.833l2.28 3.738c1.308-.767 3.334-1.282 4.861.444 1.113 1.254 1.163 3.033.127 4.53-.898 1.294-2.57 2.302-4.681 2.302z" class="colorf99175 svgShape"></path><path fill="#364f6b" d="M512.036 369.927c-.161 1.492-2.856 2.486-5.524 3.797-2.719 1.202-5.213 2.626-6.459 1.791-1.262-.767-.011-4.711 4.182-6.674 4.2-1.95 8.024-.374 7.801 1.086zM528.783 395.319c-3.101.549-4.632-2.209-6.495-.169-1.989 2.177 2.104 7.828 7.428 6.471 4.559-1.161 5.54-6.564 3.472-7.408-1.575-.642-2.452.761-4.405 1.106z" class="color1d213a svgShape"></path><path fill="#ff001b" d="M527.584 397.497c-1.782 0-3.35.874-4.333 2.205 1.439 1.52 3.797 2.6 6.465 1.921a5.997 5.997 0 0 0 2.549-1.373c-.929-1.637-2.666-2.753-4.681-2.753z" class="colorff5a5a svgShape"></path><path fill="#364f6b" d="M732.106 702.723a.8.8 0 0 1-.791-.929c.727-4.463 3.961-6.091 5.569-6.33a.805.805 0 0 1 .908.674.798.798 0 0 1-.669.908c-.144.023-3.514.612-4.23 5.005a.8.8 0 0 1-.787.672zM739.892 703.82a.8.8 0 0 1-.786-.96c1.227-6.043 5.136-6.553 5.302-6.572a.807.807 0 0 1 .886.706.801.801 0 0 1-.697.884c-.141.02-2.944.48-3.922 5.302a.803.803 0 0 1-.783.64zM747.826 705.424a.8.8 0 0 1-.789-.944c1.12-6.12 5.156-6.191 5.328-6.191a.8.8 0 0 1 .009 1.6c-.12.003-2.895.131-3.763 4.878a.8.8 0 0 1-.785.657zM568.671 724.298a.8.8 0 0 1-.739-1.107c.066-.155 1.644-3.83 6.441-5.38a.8.8 0 1 1 .494 1.522c-4.069 1.316-5.403 4.348-5.458 4.477a.804.804 0 0 1-.738.488zM572.215 732.154a.797.797 0 0 1-.713-1.157c.078-.156 1.97-3.81 7.153-4.655a.8.8 0 0 1 .256 1.58c-4.345.708-5.917 3.671-5.983 3.797a.797.797 0 0 1-.713.435zM576.806 740.09a.8.8 0 0 1-.675-1.23c.084-.132 2.117-3.244 6.923-3.966a.81.81 0 0 1 .909.673.798.798 0 0 1-.672.91c-4.094.613-5.794 3.216-5.811 3.242a.795.795 0 0 1-.674.371z" class="color1d213a svgShape"></path></svg></g></svg>
                          </div>
                          <div>
                              <a href="https://api.whatsapp.com/send?phone=962789822724&text=hi%20I%20want%20To%20Donate%20Please" class="bg-[#0056FF] px-5 hover:bg-sky-900 py-2 rounded-lg text-white">Donate</a>
                          </div>
                      </div>
                      
                  </div>
              </div>
        </div> <!-- container.// -->
        
    </section>
    <!-- feature section //end -->

    <!-- join volunters section -->
    <section class="py-16" id='About'>
      <h1 class="font-light text-gray-500 text-lg md:text-2xl text-center uppercase mb-6">{{__('Who We Are')}} <br>{{__('About Us')}}</h1>
      
        <div class="container max-w-screen-xl mx-auto px-4 m-auto text-center">
          <div class='text-sky-900 font-bold text-4xl text-center m-auto mb-40'>
              {{__('Our organization is based on helping people and people with special needs to communicate better through coaches and private courses, paid and free.')}}
          </div>
          <div class="">
              <div class="mb-4">
                    <div class="image-container md:grid md:grid-cols-3 md:gap-4 md:flex md:items-center block">
                        <img src="/build/assets/images/footer-2.jfif" class="max-w-full h-auto rounded-lg feed-in " alt="">
                        <img src="/build/assets/images/footer-3.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">
                        <img src="/build/assets/images/footer-1.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">
                        <img src="/build/assets/images/footer-6.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">
                        <img src="/build/assets/images/footer-9.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">
                        <img src="/build/assets/images/footer-8.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">
                        <img src="/build/assets/images/footer-5.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">  
                        <img src="/build/assets/images/footer-7.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">
                        <img src="/build/assets/images/footer-10.jfif" class="max-w-full h-auto rounded-lg feed-in" alt="">  
                        <button class="prev-btn absolute left-3 bg-gray-900 opacity-50 px-1 py-2 rounded-xl text-white font-bold text-2xl"><<</button>
                        <button class="next-btn absolute right-3 bg-gray-900 opacity-50 py-2 px-1 rounded-xl text-white font-bold text-2xl">>></button>
                    </div>
                </div>
                    
                </div>

        </div> <!-- container.// -->

    </section>
    <!-- join volunters section //end -->

    <footer class="bg-white py-16 ">

        <div class="container max-w-screen-xl mx-auto px-4 feed-in">
            <div class="flex flex-col lg:flex-row lg:justify-between">

                <div class="space-y-7 mb-10 lg:mb-0">
                    <div class="flex justify-center lg:justify-start">
                        <img src="build/assets/images/logo.png" alt="Image">
                    </div>
                    
                    <p class="font-light text-gray-400 text-md md:text-lg text-center lg:text-left">{{__('Learn and help others people ')}}<br> {{__('around the world')}}</p>

                    <div class="flex items-center justify-center lg:justify-start space-x-5">
                        <a href="https://www.facebook.com/profile.php?id=100089873313624&mibextid=ZbWKwL" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-info hover:text-white transition ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>

                        <a href="https://youtube.com/@_yasaminaalmnee" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-info hover:text-white transition ease-in-out duration-500">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                            </svg>
                        </a>

                        <a href="https://www.linkedin.com/in/%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D9%82%D8%A7%D8%AF%D8%B1-%D9%85%D8%AD%D9%85%D9%88%D8%AF-%D8%B3%D9%8A%D8%AF-%D8%A7%D8%A8%D9%88-%D8%B4%D9%86%D8%A8-4b78a0242" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-info hover:text-white transition ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                    </div>
                </div>

                <div class="text-center lg:text-left space-y-7 mb-10 lg:mb-0">
                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl">{{__('Quick links')}}</h4>

                    <a href="https://youtube.com/@_yasaminaalmnee" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('Our Youtupe Chanels')}}</a>

                    <a href="https://www.facebook.com/profile.php?id=100089893860919&mibextid=ZbWKwL" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('The Owner')}}</a>

                    <a href="https://www.facebook.com/profile.php?id=100089893860919&mibextid=ZbWKwL" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('Ouner Page')}}</a>

                    <a href="https://www.facebook.com/profile.php?id=100089873313624&mibextid=ZbWKwL" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('Our FaceBook')}}</a>
                </div>

                <div class="text-center lg:text-left space-y-7 mb-10 lg:mb-0">
                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl">{{__('Company')}}</h4>

                    <a href="#About" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('About Us')}}</a>

                    <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('Journalists / Media')}}</a><span class='text-sm text-gray-300 underline'>{{__('Soon Enjoy Our Youtupe Chanel')}}</span>

                    <a href="#partner" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('Sopporters')}}</a>

                    <a href="#" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('Blog')}}</a><span class='text-sm text-gray-300 underline'>{{__('Soon')}}</span>
                </div>

                <div class="text-center lg:text-left space-y-7 mb-10 lg:mb-0">
                    <h4 class="font-semibold text-gray-900 text-lg md:text-2xl">{{__('Legal')}}</h4>

                    <a href="{{route('Policy')}}" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('FAQ')}}</a> </span>

                    <a href="{{route('Policy')}}" class="block font-light text-gray-400 text-sm md:text-lg hover:text-gray-800 transition ease-in-out duration-300">{{__('Terms')}} &amp; {{__('Conditions')}}</a><span class='text-sm text-gray-300 underline'>{{__('All Right Receved')}}</span>
                </div>

            </div>
        </div> <!-- container.// -->
    
    </footer>

    <script src="{{asset('/build/assets/Jquery.js')}}"></script>
    <script src="{{asset('/build/assets/function.js')}}"></script>  
    <script>
  feather.replace();
  $(document).ready(function() {
  // Set the first image as active
  $('.slider img:first-child').addClass('active');
  
  // Next button handler
  $('#next').click(function() {
    var activeImg = $('.slider img.active');
    var nextImg = activeImg.next('img');
    
    // If the active image is the last one, set the next image as the first one
    if (nextImg.length === 0) {
      nextImg = $('.slider img:first-child');
    }
    
    activeImg.removeClass('active');
    nextImg.addClass('active');
  });
  
  // Previous button handler
  $('#prev').click(function() {
    var activeImg = $('.slider img.active');
    var prevImg = activeImg.prev('img');
    
    // If the active image is the first one, set the previous image as the last one
    if (prevImg.length === 0) {
      prevImg = $('.slider img:last-child');
    }
    
    activeImg.removeClass('active');
    prevImg.addClass('active');
  });
});
////////////////////////////////////////////////////////////////////////////////////ccdd

    </script>

<div class="text-center p-2  text-gray-300 bg-white py-5 font-bold text-lg italic"><Span>&#169;</Span><span >{{Date('Y')}}</span><span>{{__(' CopyRight Are Saved by 3almnne Company')}}</span></div> 

</body></html>