// JavaScript Document
//grabs data from the agnostically named elements in the contact form and submits them via ajax to the php files
//REQUIRES JQUERY
var C_Z =  C_Z || {};

//gets and returns info from the #CZ_FORM
C_Z.get_info = function(){
  this.sub_info ={
    "user_name": $("#C_Z_user_name").val(),
    "user_email": $("#C_Z_user_email").val(),
    "user_phone": $("#C_Z_user_phone").val(),
    "user_subject": $("#C_Z_user_subject").val(),
    "user_msg": $("#C_Z_user_msg").val(),
  };
  return(this.sub_info);
};

//verifies email and user message
//returns true if there are no issues and an error message string if not
C_Z.verify = function(){
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  if (!testEmail.test(C_Z.get_info()["user_email"])){
        return "Please Enter a Valid Email.";
  }
  else if(C_Z.get_info()["user_msg"]===""){//blank message text
        return "Please Enter a Valid Message.";
  }
  else{
    //nothing went wrong with validation on this end
    return true;//success
  }
};
//changed the text in the #C_Z_message
C_Z.message = function(message){
      $("#C_Z_message").slideUp(500 ,function(){
        $("#C_Z_message").html(message);
        $("#C_Z_message").slideDown(500);
    });
};
//Submits data to the php form if it has been varified
C_Z.submit_mail = function(){
  var varified = C_Z.verify();
  if(varified===true){
    //we have varified all the data and will now attempt to post it
    $.post( "zero_mailer.php", {
      //gets data right from the C_Z.get_info() function since we know it is safe
      user_name: C_Z.get_info()["user_name"], 
      user_email: C_Z.get_info()["user_email"],
      user_phone: C_Z.get_info()["user_phone"],
      user_subject: C_Z.get_info()["user_subject"],
      user_msg: C_Z.get_info()["user_msg"],
    },function(data){//
        if(data=="SENT"){//everything worked
          $("#C_Z_wrap").fadeOut("fast", function(){
            C_Z.message("Thanks!");
          });
        }
        else{//something went wrong on the server end, which is strange...
        //this usually means something did not pass validation on the server end
          C_Z.message(data);
        }
      }
    );
  }
  else{
    //something did not pass validation on the client end (this script)
    C_Z.message(varified);
  }
};

//starts this script when the #C_Z_submit button is clicked
$("#C_Z_submit").click(function(){
  C_Z.submit_mail();
});
//
