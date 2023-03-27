import './bootstrap';
import Alpine from 'alpinejs';
import { formToJSON } from 'axios';
import { forEach } from 'lodash';

window.Alpine = Alpine;

Alpine.start();


$(window).ready(function() {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
        else
        {
          entry.target.classList.remove('active');
        }
      });
    }, {
      rootMargin: '0px',
      threshold: 0.5
    });
  
    $('.feed-in').each(function() {
      observer.observe(this);
    });
  }); 

  //////////////////////////////////////////
  
$('#createform').submit(function(e) {
  e.preventDefault();
  var formData = new FormData(this);
  console.log(formData);
  $.ajax({
    type: 'POST',
    url: '/Courses',
    data: formData,
    processData: false,
    contentType: false,
    success: function(response){
      alert(response)
    },
    error: function(xhr) {
      alert(xhr.responseText);
    }
  });
});

////////////////////////////////////////////
$(document).on('submit','#EditUser', function(e){
  e.preventDefault();
  var index =  $('#EUsSubmit').val();
  var EditUser = {
    name:$('#Ename').val(),
    email:$('#Eemail').val(),
    Age:$('#EAge').val(),
    Gender:$('#EGender').val(),
  };
  $.ajaxSetup({
      headers:{
          'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
      }
  });
  
  $.ajax({
      url:'/users/' + index,
      type:"PUT",
      data:EditUser,
      headers: {"Authorization": localStorage.getItem('token')},
      error: function (request) {
          alert(" Can't do because: " + request.responseJSON.message);
      },
      success:function(respone){
          loadusers(1);
          $('#Ename').val('');
          $('#Eemail').val('');
          $('#EAge').val(0);
          $('#EditUserForm').toggle(400);
      }
  })
});
////////////////////////////////////////////////
$(document).on('submit','#NewUser', function(e){
  e.preventDefault()
  var NewUser = {
    name:$('#name').val(),
    email:$('#email').val(),
    Age:$('#Age').val(),
    Gender:$('#Gender').val(),
    password:$('#password').val(),
    password_confirmation: $('#password_confirmation').val(),
  }
  $.ajaxSetup({
      headers:{
          'X-CSRF-TOKEN' : $('meta[name ="csrf-token"]').attr('content'),                        
      }
  });
  
  $.ajax({
      url:'/users',
      type:"POST",
      data:NewUser,
      headers: {"Authorization": localStorage.getItem('token')},
      error: function (request) {
        console.log(request);
          alert(" Can't do because: " + request.responseJSON.message);
      },
      success:function(respone){        
          loadusers(1);                       
          $('#name').val('');
          $('#email').val('');
          $('#Age').val(0);
          $('#token').val('');
          $('#password').val('');
          $('#password_confirmation').val('');
          $('#NewUserForm').slideToggle(400);
      }
  })
});
$(document).ready(function() {
  var currentIndex = 0;
  var itemsPerPage = 3;
  var $images = $('.image-container img');
  var numItems = $images.length;
  var numPages = Math.ceil(numItems / itemsPerPage);
  
  function showPage(pageIndex) {
    var startIndex = pageIndex * itemsPerPage;
    var endIndex = startIndex + itemsPerPage;
    $images.hide();
    $images.slice(startIndex, endIndex).show();
  }
  
  function showPrevPage() {
    if (currentIndex === 0) {
      return;
    }
    currentIndex--;
    showPage(currentIndex);
  }
  
  function showNextPage() {
    if (currentIndex === numPages - 1) {
      return;
    }
    currentIndex++;
    showPage(currentIndex);
  }
  
  showPage(currentIndex);
  
  $('.prev-btn').on('click', function() {
    showPrevPage();
  });
  
  $('.next-btn').on('click', function() {
    showNextPage();
  });
});
