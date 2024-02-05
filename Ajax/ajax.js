$.getScript("confirm.js", function(){});
$(document).ready(function(){
    // Registration jquery code/stafff
    $("#register-form").on('submit', function (e) {
        $.ajax({
            url: "../server/signupDb.php",
            type: "POST",
            data: new FormData(this),
            dataType: "json", 
            processData: false,
            contentType: false,
            cache:false,
            success:function(data){
                //  $("#error").css("display","block");
                 if(data.success==true){
                    $("#register-form")[0].reset();
                    processing(data.message)
                 }else
                 {
                    $("#register-form")[0].reset();
                    redErrorDialog('Error',data.message,' Try Again')
                 }
            }
        })
    })

    // End of Registration Jquery Code
  // Registration jquery code for customers
  $("#staff-form").on('submit', function(e){
    $("#staff-form").validate({
        rules:
        {
            fname:{ required:true, minlength:3}, lname:{required:true,minlength:3}, mobile:{required:true,minlength:3}, address:{required:true,minlength:3},email:{required: true,email:true},password:{
                required:true,minlength:8,maxlength:15},cpassword:{required:true,equalTo:'#exampleInputPassword'}
        },
        messages:
        {
            fname: "<p style='font-size:12px;' class='text-warning;text-transform:capitalize'>please enter first name</p>",
            lname: "<p style='font-size:12px;' class='text-warning;text-transform:capitalize'>please enter lastname name</p>",
            mobile: "<p style='font-size:12px;' class='text-warning;text-transform:capitalize'>please enter lastname name</p>",
            address: "<p style='font-size:12px;' class='text-warning;text-transform:capitalize'>please enter lastname name</p>",
            password:{
                          required: "<p style='font-size:12px; text-transform:capitalize' class='text-warning'>please provide a password</p>",
                          minlength: "<p style='font-size:12px;text-transform:capitalize' class='text-warning'>password at least have 8 characters</p>"
                         },
            email: "<p style='font-size:12px;' class='text-warning;text-transform:capitalize'>please enter a valid email address</p>",
            cpassword:{
          required: "<p style='font-size:12px;' class='text-warning;text-transform:capitalize'>please retype your password</p>",
          equalTo: "<p style='font-size:12px;' class='text-warning;text-transform:capitalize'>password doesn't match !</p>"
           }
           },
           }); 

    $.ajax({
        url: "server/CustomerSignup.php",
        type: "POST",
        data: new FormData(this),
        dataType: "json", 
        processData: false,
        contentType: false,
        cache:false,
        success:function(data){
            //  $("#error").css("display","block");
             if(data.status==1){
                $("#staff-form")[0].reset();
                redErrorDialog('CheckEmailValidity!',data.message,'Try another user')
                                    
             }else if (data.status==2){
                $("#staff-form")[0].reset();
                redErrorDialog('Failed!',data.message,'Try another user')
             }else if(data.status==3){
                $("#staff-form")[0].reset();
                processing(data.message)
             }else
             {
                $("#staff-form")[0].reset();
                redErrorDialog('Error',data.message,' Try Again')
             }
        }
    })
})

// End of Registration Jquery Code

    // Login Jquery/Ajax Call code
$("#submit-form").on('submit', function(e){
    
    $.ajax({
        url:'server/loginAuthentication.php',
        data: new FormData(this),
        type:'POST',
        dataType:'JSON',
        processData:false,
        contentType:false,
        cache:false,
        success:function(data){
            $('#uid').val(data.User_ID)
            if(data.Role=='Admin'){
                setTimeout('window.location.href =("views/index.view.php")',1800);
                processing('Wait for authentication',data.message,'');

            } 
            else{;
                redErrorDialog('Whoops',data.message,' Try Again')
            }
        }

    })
})



// PasswordReset
$('#reset-form').on('submit',function(e){
    // Add a product using Ajax
$.ajax({
    url: "server/passwordReset.php",
    type: "POST",
    data: new FormData(this),
    dataType: "json", 
    processData: false,
    contentType: false,
    cache:false,
    success:function(data){
   if(data.status==1){
            $("#reset-form")[0].reset();
            processing(data.message)
         }else if(data.status==2)
         {
            $("#reset-form")[0].reset();
            redErrorDialog('Error',data.message,' Try Again')
         }
         else
         {
            $("#reset-form")[0].reset();
            redErrorDialog('Error',data.message,' Try Again')
         }
    }
})
})

})
$(document).ready(function(){
    $("#logout").click(function(){
        // alert('hi');
        $.ajax({
            url: "../server/signOut.php",
            type: "POST",
            dataType: "json",
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data.status == 1) {
                    setTimeout(function() {
                        window.location.href = "../index.php";
                    }, 1800);
                    logoutMyself(data.message);
                } else {
                    redErrorDialog('Failed', data.message, 'Try Again');
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Handle any error that occurs during the Ajax call
                // Display an error message or handle the error in some way
            }
        });
    });
    
 //enrol student
// JavaScript/jQuery AJAX code for handling the form submission
$("#add-student-form").on('submit', function(e){
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: '../server/EnrolStudent.php',
        type: 'POST',
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.success) {
                notify("Sucess", data.message)
                // Optionally, you can clear the form fields here
            } else {
                redErrorDialog("Error", data.message,"Try Again!");
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            redErrorDialog('Error', errorThrown, '');
        }
    });
});

//end of student enrollement

})