<x-app-layout>
<div>
    <section class="w-full">
        <div class=" m-auto p-3 w-11/12">
            <div id="paginateUser" class=" w-full md:w-3/4 lg:grid-cols-12 mt-3 text-xs px-2 grid md:grid-cols-8 grid-cols-4 mb-5"></div>
                <div class=" sm:-mx-6 lg:max-x-full text-sm md:text-sm font-bold font-bold ">
                  <div class=" p-3">
                    <div class="overflow-x-auto p-3">
                      <table class=" text-center" style="width: -webkit-fill-available">
                    <thead class="bg-sky-700 text-white w-full">
                        <tr>
                            <th class="p-3">{{__('#')}}</th>
                            <th class="p-3">{{__('Name')}}</th>
                            <th class="p-3">{{__('Email')}}</th>
                            <th class="p-3">{{__('Gender')}}</th>
                            <th class="p-3">{{__('Age')}}</th>
                            <th class="p-3">{{__('Created_at')}}</th>
                            <th class="p-3">{{__('Updated_at')}}</th>
                            <th class="p-3" colspan="2">{{__('Option')}}</th>
                        </tr>
                    </thead>
                    <tbody id="UserBody">
                        <tr>
                            <td>.</td>
                            <td>.</td>
                            <td>.</td>
                            <td>.</td>
                            <td>.</td>
                            <td>.</td>
                            
                        </tr>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
    </section>
    <script>
    $(window).on('load',function(){
            loadusers(1);
    });
       
    </script>
    
</x-app-layout>