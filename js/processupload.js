

$("form.MyUploadForm").submit(function(){
   
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: '../php/processupload.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
          console.log(data);
            if(data=="done"){
             $.bootstrapGrowl("Your image has been received!");
            } 
            else if (data=="done1"){
              alert('Try again!');
            }
            else if (data=="done2"){
              alert('File not uploaded');
            }
            else if (data=="done3"){
              alert('Unsupported File!');
            }
            else if (data=="done4"){
              alert('The image dimension should be atleast 50*50 px.');
            }
            else if (data=="done5"){
              alert('The image size should be atmost 10MB.');
            }
            else if (data=="done6"){
              alert('Do not use $ in the caption.');
            }
            else if (data=="done7"){
              alert('Network error');
            }

        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});

