//jQuery to collapse the navbar on scroll
/*$(window).scroll(function() {
    if ($(".navbar").offset().top > 0) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});*/

//jQuery for page scrolling feature - requires jQuery Easing plugin


$('#clientsignin').click(function(e) {
    e.preventDefault();
    $('#mybtn').trigger('click');

});

$('#ambassadorsignin').click(function(e) {
    e.preventDefault();
    $('#mybtn2').trigger('click');

});

$("#formsignin").submit(function () {
        $.ajax({
          url:"../php/clientauthentic.php",
          data:$(this).serialize(),
          type:"post",
          success:function(data){
            console.log(data);
            if(data.substr(0,4)=="done"){
              $("#formsignin")[0].reset();
              var a=data.substr(4);
              window.location = "../clientaccount.php?id="+a;
            }
            else if(data=="passworderr"){
              alert("Password Not correct");
            }
            else if(data=="emailerr"){
              alert("User not found");
            }
            else{
              alert("Network error");
            }
          }
          ,
          error:function(data){
            alert("Network error2");
          }
        }
              )
          return false;
      }
                        );

      $("#formsignin2").submit(function () {
        $.ajax({
          url:"../php/ambassadorauthentic.php",
          data:$(this).serialize(),
          type:"post",
          success:function(data){
            console.log(data);
            if(data.substr(0,4)=="done"){
              $("#formsignin2")[0].reset();
              var a=data.substr(4);
              window.location = "../ambassadoraccount.php?id="+a;
            }
            else if(data=="passworderr"){
              alert("Password Not correct");
            }
            else if(data=="emailerr"){
              alert("User not found");
            }
            else{
              alert("Network error");
            }
          }
          ,
          error:function(data){
            alert("Network error2");
          }
        }
              )
          return false;
      }
                        );
      
      
      $("#formsignup").submit(function () {
        $.ajax({
          url:"../php/clientregister.php",
          data:$(this).serialize(),
          type:"post",
          success:function(data){
            console.log(data);
            if(data.substr(0,4)=="done"){
            	$("#formsignup")[0].reset();
            	var a =data.substr(4);
              window.location="../clientaccount.php?id="+a;
              
            }
            else if(data=="passworderr"){
              alert("Password Mismatch");
            }
            else if(data=="emailerr"){
              alert("The email already exists.. Please try a different one");
            }
            else{
              alert("Network error");
            }
          }
          ,
          error:function(data){
            alert("Network error2");
          }
        }
              )
          return false;
      }
                           );



      
      
      $("#formsignup2").submit(function () {
        $.ajax({
          url:"../php/ambassadorregister.php",
          data:$(this).serialize(),
          type:"post",
          success:function(data){
            console.log(data);
            if(data.substr(0,4)=="done"){
              $("#formsignup2")[0].reset();
              var a =data.substr(4);
              window.location="../ambassadoraccount.php?id="+a;
              
            }
            else if(data=="passworderr"){
              alert("Password Mismatch");
            }
            else if(data=="emailerr"){
              alert("The email already exists.. Please try a different one");
            }
            else{
              alert("Network error");
            }
          }
          ,
          error:function(data){
            alert("Network error2");
          }
        }
              )
          return false;
      }
                           );



  $(document).ready(function() {
      jQuery('#carousel').carousel({
    interval: 7000
  })
  $('#myCarousel').carousel({
  interval: 7000
  })
    
    $('#carousel').on('slid.bs.carousel', function() {
      //alert("slid");
  });
    

     $(window).scroll(function(){
    if ($(this).scrollTop() > 600) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollup').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
/*
  $("#lasthead").click(function(){
  $("#lasthead").load("../php/response.php");
  var refreshId = setInterval(function() {
      $("#lasthead").load('../php/response.php?randval='+ Math.random());
   }, 1000);
   $.ajaxSetup({ cache: false });
});*/

 // setTimeout(function() { window.location.href = "index.php"; }, 60);
   
});


function f(i){
  document.getElementById("qwe").style.display="none";
  $("#pa"+i).fadeIn(100);
  document.getElementById("pa"+(((i+1)%6))).style.display="none";
  document.getElementById("pa"+(((i+2)%6))).style.display="none";
  document.getElementById("pa"+(((i+3)%6))).style.display="none";
  document.getElementById("pa"+(((i+4)%6))).style.display="none";
  document.getElementById("pa"+(((i+5)%6))).style.display="none";
}

function g(i){
      $("#squadimage"+i).fadeIn('slow');
  $("#squadimage"+(((i+1)%14))).hide();
  $("#squadimage"+(((i+2)%14))).hide();
  $("#squadimage"+(((i+3)%14))).hide();
  $("#squadimage"+(((i+4)%14))).hide();
  $("#squadimage"+(((i+5)%14))).hide();
  $("#squadimage"+(((i+6)%14))).hide();
  $("#squadimage"+(((i+7)%14))).hide();
  $("#squadimage"+(((i+8)%14))).hide();
  $("#squadimage"+(((i+9)%14))).hide();
  $("#squadimage"+(((i+10)%14))).hide();
  $("#squadimage"+(((i+11)%14))).hide();
  $("#squadimage"+(((i+12)%14))).hide();
  $("#squadimage"+(((i+13)%14))).hide();

}

var a1=a2=a3=a4=a5=a6=0;

(function pulse1 (back) {
    if(!$("#icon1").hasClass('transition')){
        $('#icon1').animate ({
            opacity: (back) ? 1 : 0.5
        }, 500, function () { pulse1(!back)} );
    }
})(false);
if (a1==0){
$('#icon1').hover(
    function () {
        var element = $("#icon1");
        element.addClass('transition');
        element.stop(true, true);
        element.css('opacity', 1);
        a1=1;
        f(0);
        x2();

    },
    function(){
        var element = $("#icon1");
        element.removeClass('transition');
    }
)};

function x2(){
  (function pulse2 (back) {
    if(!$("#icon4").hasClass('transition')  && (a2==0)){
        $('#icon4').animate ({
            opacity: (back) ? 1 : 0.5
        }, 500, function () { pulse2(!back)} );
    }
})(false);
$('#icon4').hover(
    function () {
        var element = $("#icon4");
        element.addClass('transition');
        element.stop(true, true);
        element.css('opacity', 1);
        f(1);
        a2=1;
        x3();
    },
    function(){

        var element = $("#icon4");
        element.removeClass('transition');
    }
);
}

function x3(){
  (function pulse2 (back) {
    if(!$("#icon2").hasClass('transition') && (a3==0)){
        $('#icon2').animate ({
            opacity: (back) ? 1 : 0.5
        }, 500, function () { pulse2(!back)} );
    }
})(false);

$('#icon2').hover(
    function () {
        var element = $("#icon2");
        element.addClass('transition');
        element.stop(true, true);
        element.css('opacity', 1);
        f(2);        
        a3=1;
        x4();
    },
    function(){

        var element = $("#icon2");
        element.removeClass('transition');
    }
);
}

function x4(){
  (function pulse3 (back) {
    if(!$("#icon5").hasClass('transition') && (a4==0)){
        $('#icon5').animate ({
            opacity: (back) ? 1 : 0.5
        }, 500, function () { pulse3(!back)} );
    }
})(false);

$('#icon5').hover(
    function () {
        var element = $("#icon5");
        element.addClass('transition');
        element.stop(true, true);
        element.css('opacity', 1);
        f(3);
        a4=1;
        x5();
    },
    function(){
        var element = $("#icon5");
        element.removeClass('transition');
    }
);
}

function x5(){
  (function pulse4 (back) {
    if(!$("#icon3").hasClass('transition') && (a5==0)){
        $('#icon3').animate ({
            opacity: (back) ? 1 : 0.5
        }, 500, function () { pulse4(!back)} );
    }
})(false);

$('#icon3').hover(
    function () {
        var element = $("#icon3");
        element.addClass('transition');
        element.stop(true, true);
        element.css('opacity', 1);
        f(4);
        a5=1;
        x6();
    },
    function(){
        var element = $("#icon3");
        element.removeClass('transition');
    }
);
}

function x6(){
  (function pulse2 (back) {
    if(!$("#icon6").hasClass('transition') && (a6==0)){
        $('#icon6').animate ({
            opacity: (back) ? 1 : 0.5
        }, 500, function () { pulse2(!back)} );
    }
})(false);

$('#icon6').hover(
    function () {
        var element = $("#icon6");
        element.addClass('transition');
        element.stop(true, true);
        element.css('opacity', 1);
        f(5);
        a6=1;
    },
    function(){
        var element = $("#icon6");
        element.removeClass('transition');
    }
);
}

function x6(){
  (function pulse2 (back) {
    if(!$("#icon6").hasClass('transition') && (a6==0)){
        $('#icon6').animate ({
            opacity: (back) ? 1 : 0.5
        }, 500, function () { pulse2(!back)} );
    }
})(false);

$('#icon6').hover(
    function () {
        var element = $("#icon6");
        element.addClass('transition');
        element.stop(true, true);
        element.css('opacity', 1);
        f(5);
        a6=1;
    },
    function(){
        var element = $("#icon6");
        element.removeClass('transition');
    }
);
}

