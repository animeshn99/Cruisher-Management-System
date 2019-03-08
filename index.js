$(document).ready(function(){
  $('#login-form').submit(function(event){
    event.preventDefault();
    var user_name = document.getElementById("user_name").value;
    var password = document.getElementById("password").value;
    //window.alert(emp_id+"\r\n"+password);
    $.ajax({
      url : "db_login.php",
      type : "post",
      dataType : "JSON",
      data : {user_name:user_name,password:password}, 
      success : function(response){
        //window.alert(response.stats+"\rWelcome "+response.name);
        if(response.stats == 'success')
          window.location.href = "Admin/";
        else
          window.alert("Invalid credentials");
      }
    });
    document.getElementById("login-form").reset();
  });
});
$(function() {
    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $("#result").html('');
    document.getElementById("register-form").reset();
    $('#message').html('');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $("#result").html('');
    document.getElementById("login-form").reset();
    $(this).addClass('active');
    e.preventDefault();
  });
}); 