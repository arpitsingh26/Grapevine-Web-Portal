    $(".formselect").submit(function () {        
         $.ajax({
          url:"../php/addclientresponse.php",
          data:$(this).serialize(),
          type:"POST",
          success:function(data){
            console.log(data);
            if(data=="done"){
             $.bootstrapGrowl("Your response has been received!");
            } 
          },
          error:function(data){
            alert("Network ERROR");
          }
        })
       return false;
     });

    $(".imageview").click(function () {

         $.ajax({
          url:"../php/viewimage.php",
          data:{imageview: $(this).val()},
          type:"POST",
          success:function(data){
            console.log(data);
            $(".myModal").html(data);$(".carousel-caption").show();
            $(".myModal").modal('show');
            
          },
          error:function(data){
            alert("Network ERROR");
          }
        })
       return false;
     });

$(document).ready(function(){
    $('.btn-custom2').click(function(){
        $('.dropdown-toggle').click();
    },function(){
        $('.dropdown-toggle').click();
    });  


});










$("#mailform").submit(function () {

  if($.trim($("#InputMess").val()).length<0)
  {
    $("#InputMess").addClass("has-error");
    alert ("Should be descriptive1");
    return false;
  }
         $.ajax({
          url:"../php/mail.php",
          data:$(this).serialize(),
          type:"POST",
          success:function(data){
            console.log(data);
            if(data=="done"){
              $.bootstrapGrowl("Mail successfully sent");
              $("#mysubmit")[0].reset();
              $("#mysubmit").on("click",".sframe",f(0));
            } 
            else{
              alert("Network error");
            }
          },
          error:function(data){
            alert("Network ERROR"+data);
          }
        })
       return false;
     });