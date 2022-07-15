$("#loginForm").submit(function(event){
    event.preventDefault();
    var datatopost = $("#loginForm").serializeArray();
    $.ajax({
        url:"loginValidation.php",
        type:"POST",
        data: datatopost,
        
        success:function(data){
           if(data=="success"){
            window.location="/php/homePage.php";
          // $('#loginmessage').html(data);
        }
        else{
            $('#loginmessage').html(data);
        }
    },
    error: function(){
         $("#loginmessage").html("<div class='alert alert-danger' role='alert'>There was an error with ajax call. Please try again later.</div>");
    }
});
});