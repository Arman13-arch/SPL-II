$("#signupForm").submit(function(event){
    event.preventDefault();
    var datatopost = $("#signupForm").serializeArray();
    $.ajax({
        url:"signupValidation.php",
        type:"POST",
        data: datatopost,
        
        success:function(data){
           if(data){
               $("#signupmessage").html(data);
           }
        },
        error: function(){
             $("#signupmessage").html("<div class='alert alert-danger' role='alert'>There was an error with ajax call. Please try again later.</div>");
        }
    });
});