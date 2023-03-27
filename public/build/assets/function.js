//ent here for every element except with id menu_content

// /////////////////////LOAD
/*lOAD COURSES*/
function loaddata(page_id){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
        }
    });
    var id = $('auth').val();
    var x ='';
    $.ajax({
        url:'/Courses/show?page=' + ( page_id  ),
        type:'GET',
        success:function(respone){
            Array.from(respone.data).forEach( ele =>{  
                x  +=  "<tr class='border-b-2 border-slate-400 p-0 text-xs md:text-sm  edit ' data-edit = '" +ele.id+ "' ><td  class=' p-1 whitespace-nowrap'>" +
                ele.id + "</td><td class=' p-1 whitespace-nowrap'>" + ele.CourseName +
                "</td><td class='p-1 whitespace-nowrap'>" +
                "<a class='px-3 py-1  rounded-sm border-2  border-blue-500 text-blue-500 link' href='"+ele.CourseLink+"' >Link</a> </td><td class=' p-1 whitespace-nowrap'>" +
                ele.CoursePrice + "</td><td class=' p-1 whitespace-nowrap'>" +
                ele.FullQty + "</td><td class=' p-1 whitespace-nowrap'>" +
                ele.CourseType_id + "</td><td class=' p-1 whitespace-nowrap'>" +
                ele.created_at.substr(0,10) + "</td><td class=' p-1 whitespace-nowrap' >" +
                ele.updated_at.substr(0,10) + "</td><td class=' p-1 whitespace-nowrap' ><button type='button' class=' rounded-sm text-red-500 border-2 border-red-500 px-4 py-1 delete font-bold' value=' " + ele.id + "' >Dele</button></td><td class=' p-1 whitespace-nowrap '>"
                if (ele.State) {
                    x += "<button  type='button' class='animate-pump2 bg-green-500 p-3 w-2 h-2 rounded-full State'  value= '" + ele.id + "'></button</td></tr>";
                }
                
                else {
                    x += "<button  type='button' class='animate-pump1 p-3 w-2 h-2 rounded-full State' style='background:red;' value= '" + ele.id + "'></button></td></tr>";
                }
                
                
            });
            
            var t = '';
            
    $('#tbody').text().replace($('#tbody').html(x));
    if (respone.current_page  > 0)
    {
    t += "<button class='p-1 bg-white shadow-xl rounded-sm font-bold text-sky-900    hover:bg-gray-100 border-2' onclick =loaddata(" + respone.first_page + ") >First</button>"
    +  "<button class='p-1 ml-10 bg-white border-2 font-bold  text-blue-500  border-blue-500  ' onclick =loaddata(" + (respone.current_page -1 ) + ") >Prev</button>" ;
    } ;   
    
    if(respone.current_page < respone.last_page)
    {
    t += "<button class=' p-1 ml-10   bg-white border-2 font-bold  text-blue-500  border-blue-500  hover:bg-blue-300' onclick =loaddata(" + (respone.current_page + 1 ) + ") >Next</button>" 
    + "<button class='p-1 ml-10 bg-blue-500 border-2 font-bold  text-white  border-blue-500  hover:bg-blue-300' onclick =loaddata(" + respone.last_page + ") >Last</button>";
    }
    
    $('#paginate').text().replace($('#paginate').html(t));
    
    
    },
    error: function (request) {
        alert(" Can't do because: " + request.responseJSON.message);
    },
    
    
    })
    
    };
    
    //////////////////////////
    /*End LOad Courses*/
    /** Chick Edit */ 
    /**End Chick Edit */
    /**Preview Image */
    /* * EndPreview Image */
    
    
    
    //////////////////////////////////////////
    
    /////////////////////////
    
    $(document).on('click', '.delete',function(){
        if(confirm('Are You Sure')){
            
            var index = $(this).val();
            //console.log(index);
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
                }
            });
            
            $.ajax({
                url : "/Courses/" + index,
                type: "DELETE",
                data: index,
                error: function(request){
                    alert(" Can't do because: " + request.responseJSON.message);
                },
                success : function(respone){    
                    alert(respone);
                    loaddata(1);
                    //return false;
                }
            })}})
            //////////////////////////////////////////////
            $(document).on('click','#create',function(){
                $('#form2').slideToggle();    
            })
            ///////////////////////////////////////////////////////////////////
            ///////////////////////////////////
            
            $(document).on('click', '.State',function(){
                if(confirm('Are You Sure')){
                    
                    var index = $(this).val();
                    //console.log(index);
                    $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
                        }
                    });
                    
                    $.ajax({
                        url : "/Courses/" + index + "/active",
                        type: "Put",
                        data: index,
                        error: function(request){
                            alert(" Can't do because: " + request.responseJSON.message);
                        },
                        success : function(respone){    
                            console.log(respone);
                            loaddata(1);
                            //return false;
                            
                            
                        }
                        
                    })
                }
            })
            
            /////////////////////////////////////////////////////////////
            $(document).on('click','.edit',function(evt){
                /////////////////////
                /////////////////////////
                if(($(evt.target).closest('.delete').length) || ($(evt.target).closest('.link').length) || ($(evt.target).closest('.State').length) ) {
                    
                }else{
                    var index = $(this).data('edit');
                    location.replace('/Courses/'+ index + '/edit');
                    $('#form1').slideToggle(400);
                }
            });
            
            
    ///////////////////
    $(document).on('click','#getCourse',function(evt){
        var x = '';
        var courseName = $('#SearchBox').val();
        
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
            }
        });
        
        $.ajax({
            url:"/Courses/"+courseName +"/showbyname",
            data:courseName,
            type:'GET',
            error: function (request) {
                
            },
            
            success:function(respone){
                
                Array.from(respone).forEach( ele =>{  
                    var d = ele.created_at;
                    x  +=  "<tr class='border-b-2 border-slate-400 p-0 text-xs md:text-sm edit' data-edit = '" + ele.id + "' ><td  class=' p-1 whitespace-nowrap'>" +
                    ele.id + "</td><td class=' p-1 whitespace-nowrap'>" + ele.CourseName +
                    "</td><td class='p-1 whitespace-nowrap'>" + 
                    ele.CourseLink+ "</td><td class=' p-1 whitespace-nowrap' >" + 
                    ele.CoursePrice + "</td><td class=' p-1 whitespace-nowrap'>" +
                    ele.FullQty + "</td><td class=' p-1 whitespace-nowrap'>" +
                    ele.CourseType_id + "</td><td class=' p-1 whitespace-nowrap'>" +
                    d + "</td><td class=' p-1 whitespace-nowrap' >" +
                    ele.updated_at + "</td><td class=' p-1 whitespace-nowrap' ><button type='button' class='px-3 py-2 rounded-sm text-red-500 delete font-bold' value=' " + ele.id + "' >Del</button></td><td class=' p-1 whitespace-nowrap '>"
                    if (ele.State) {
                        x += "<button  type='button' class='animate-pump2 bg-green-500 p-3 w-2 h-2 rounded-full State'  value= '" + ele.id + "'></button></td></tr>";
                    }
                    
                    else {
                        x += "<button  type='button' class='animate-pump1 p-3 w-2 h-2 rounded-full State' style='background:red;' value= '" + ele.id + "'></button></td></tr>";
                    }
                    
                    
                });
                
                var t = '';
                
                $('#tbody').text().replace($('#tbody').html(x));
            }
            
        });
        
    });
    ///////////////////////////////////////////////
    function PriceSet(){
        $('#CoursePrice').val(0);
        $('#CoursePrice').toggle(100);
    };
    
    
    
    
    ////////////////////////
    
    
    /////////////////////////////////
    /////////////////////////////////////
    ////////////////////////////////
    $(document).on('click','#NewUserBtn',function(){
        $('#NewUserForm').slideToggle(400);
    }); 
    
    ////////////////
    $(document).on('click','#NewUserForm',function(evt){    
        if($(evt.target).closest('#NewUser').length)
        return ;
        //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
        if(evt.target.id != "NewUser")
        $(this).slideToggle(400);
        //Do processing of click event here for every element except with id menu_content
        
    });
    ////////////////////////////////////////////////////////////////////    
    $(document).on('click','#form2',function(evt){    
        if($(evt.target).closest('#createform').length)
        return ;
        //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
        if(evt.target.id != "createform")
        $(this).slideToggle(400);
        //Do processing of click event here for every element except with id menu_content
        
    });       
    //////////////
    $(document).on('click','#EditUserForm',function(evt){    
        if($(evt.target).closest('#EditUser').length)
        return ;
        //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
        if(evt.target.id != "EditUser")
        $(this).slideToggle(400);
        //Do processing of click event here for every element except with id menu_content
        
    });
    /////////////////
    
    
    function loadusers(page_id){
        
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
            }
        });
        
        var x ='';
        $.ajax({
            url:'/users/'+$('#auth').val()+'/?page=' + ( page_id  ),
            type:'GET',
            success:function(respone){
                console.log(respone);
                Array.from(respone.data).forEach( ele =>{  
                    var d = ele.created_at;
                    x  +=  "<tr class='border-b-2 border-slate-400 p-0 text-xs md:text-sm edituser' data-edit = '" + ele.id + "' ><td  class=' p-1 whitespace-nowrap'>" +
                    ele.id + "</td><td class=' p-1 whitespace-nowrap'>" + ele.name +
                    "</td><td class='p-1 whitespace-nowrap'>" + 
                    ele.email+ "</td><td class=' p-1 whitespace-nowrap' >" + 
                    ele.Gender + "</td> <td class=' p-1 whitespace-nowrap'>" +
                    ele.Age + "</td><td class=' p-1 whitespace-nowrap'>" +
                    ele.created_at.substr(1,10) + "</td><td class=' p-1 whitespace-nowrap'>" +
                    ele.updated_at.substr(1,10) + "</td><td class=' p-1 whitespace-nowrap' ><button type='button' class='px-3 py-2 rounded-sm text-red-500 deleteUser font-bold' value=' " + ele.id + "' >Del</button></td><td class=' p-1 whitespace-nowrap '><button type='button' class='px-3 py-2 rounded-sm text-red-500 deleteUserCourse font-bold' value='"+ele.id+"'>Del Course</button></td></tr>"
                });
                
                var t = '';
                
                $('#UserBody').text().replace($('#UserBody').html(x));
                if (respone.current_page  > 0)
                {
                    t += "<button class='p-1 bg-white shadow-xl rounded-sm font-bold text-sky-900    hover:bg-gray-100' onclick =loadusers(" + respone.first_page + ") >First</button>"
                    +  "<button class='p-1 ml-10 bg-white border-2 font-bold  text-blue-500  border-blue-500  ' onclick =loadusers(" + (respone.current_page -1 ) + ") >Prev</button>" ;
                } ;   
                
                if(respone.current_page < respone.last_page)
                {
                    t += "<button class=' p-1 ml-10   bg-white border-2 font-bold  text-blue-500  border-blue-500  hover:bg-blue-300' onclick =loadusers(" + (respone.current_page + 1 ) + ") >Next</button>" 
                    + "<button class='p-1 ml-10 bg-sky-700  font-bold  text-white    hover:bg-blue-300' onclick =loadusers(" + respone.last_page + ") >>></button>";
                }
                
                $('#paginateUser').text().replace($('#paginateUser').html(t));
                
                
            },
            error: function (request) {
                alert(" Can't do because: " + request.responseJSON.message);
            },
            
            
        })
        
    };
    
    ////////////////////////////////////////////////////
    
    
    ////////////////////////////////////
    
    
    $(document).on('click','.edituser',function(evt){
        /////////////////////
        /////////////////////////
        if(($(evt.target).closest('.deleteUser').length) || ($(evt.target).closest('.deleteUserCourse').length)) {
            
        }else{
            var index = $(this).data('edit');
            
            $.ajax({
                url:"/users/"+ index +"/edit ",
                type:'GET',
                error: function (request) {
                    alert(" Can't do because: " + request.responseJSON.message);
                },
                
                success:function(respone){
                    loadusers(1);         
                    console.log(respone);
                    $('#Ename').val(respone[0].name);
                    $('#Eemail').val(respone[0].email);
                    $('#EAge').val(respone[0].Age);                
                    $('#EUsSubmit').val(respone[0].id);
                }
            });
            
            $('#EditUserForm').toggle(400);
        }
    });
    
    /////////////////////////////////////
    /////////////////////////////////////////////////////////////////
    $(document).on('click', '.deleteUser',function(){
        if(confirm('Are You Sure')){
            
            var index = $(this).val();
            // /alert(index);
            //console.log(index);
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
                }
            });
            
            $.ajax({
                url:"/users/"+index,
                type:"DELETE",
                error: function(request){
                    alert(" Can't do because: " + request.responseJSON.message);
                },
                success : function(respone){    
                    alert('Done');
                    loadusers(1);
                    
                    //return false;
                    
                    
                }
                
            })
        }
    })
    ////////////////////////////////////////////////////////
    $(document).on('click', '.deleteUserCourse',function(){
        if(confirm('Are You Sure')){
            
            var index = $(this).val();
            //console.log(index);
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
                }
            });
            
            $.ajax({
                url : "/user/"+index +"/Courses",
                type: "DELETE",
                data: index,
                error: function(request){
                    alert(" Can't do because: " + request.responseJSON.message);
                },
                success : function(respone){    
                    alert('Done');
                    loadusers();
                    //return false;
                    
                    
                }
                
            })
        }
    });
    
    ////////////////////////////////////////////////
    function dropdown() { 
        document.querySelector("#arrow").classList.toggle("rotate-180");
        document.querySelector("#submenu").classList.toggle("hidden");
    };
    
    //dropdown();
    function dropdown2() {
        document.querySelector("#arrow2").classList.toggle("rotate-180");
        document.querySelector("#submenu2").classList.toggle("hidden");
        
    };
    
    //dropdown2();
    
    
    function dropdown3() {
        document.querySelector("#arrow3").classList.toggle("rotate-180");
        document.querySelector("#submenu3").classList.toggle("hidden");
        
    };
    
    //dropdown3();
    function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
    };
    
    
    //////////////////
    
    ///////////////////////////////////////////////////////////////////////  
    
