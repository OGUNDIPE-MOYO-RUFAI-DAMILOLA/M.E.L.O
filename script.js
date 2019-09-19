//login form validation

$(document).ready(function() {

    $('#btn_login').click(function(e) {
      e.preventDefault();

      var email = $('#login_email').val();
      var password = $('#login_pass').val();
  
      $(".error").remove();
  
      if (email.length < 1) {
        $('#login_email').after('<span class="error  text-danger">This field is required</span>');
      } else {
        var regEx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#login_email').after('<span class="error text-danger">Enter a valid email</span>');
        }
      }
      if (password.length < 8) {
        $('#login_pass').after('<span class="error text-danger">Password must be at least 8 characters long</span>');
      }
    });
});
//login form validation

//forget password modal validation

$(document).ready(function() {

    $('#btn_modal').click(function(e) {
      e.preventDefault();

      var email = $('#modal_email').val();
    
  
      $(".error").remove();
  
      if (email.length < 1) {
        $('#modal_email').after('<span class="error  text-danger">This field is required</span>');
      } else {
        var regEx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#modal_email').after('<span class="error text-danger">Enter a valid email</span>');
        }
      }

    });
});

//login form validation

//contact us validation

$(document).ready(function() {

    $('#contact_send').click(function(e) {
      e.preventDefault();
      var con_name = $('#contact_name').val();
      var email = $('#contact_email').val();
      var con_mess = $('#contact_mess').val();
      
      $(".error").remove();
  
      if (con_name.length < 1) {
        $('#contact_name').after('<span class="error text-danger">This field is required</span>');
      }
      if (con_mess.length < 1) {
        $('#contact_mess').after('<span class="error text-danger">This field is required</span>');
      }
      if (email.length < 1) {
        $('#contact_email').after('<span class="error text-danger">This field is required</span>');
      } else {
        var regEx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#contact_email').after('<span class="error text-danger">Enter a valid email</span>');
        }
      }
    });
});

//contact us validation

//forget password
$(document).ready(function() {

    $('#confirm').click(function(e) {
      e.preventDefault();
      var password = $('#forget_pass').val();
      var conpassword = $('#forget_passcon').val();
      
      $(".error").remove();
  
      if (password.length < 8) {
        $('#forget_pass').after('<span class="error text-danger">Password must be at least 8 characters long</span>');
      }
        if (conpassword.length < 8) {
            $('#forget_passcon').after('<span class="error text-danger">Password must be at least 8 characters long</span>');
      } else{
        if (!(password === confirm)){
            $('#forget_passcon').after('<span class="error text-danger">Password is not the same</span>');
        }
    
      }
    });
});
//forget password

//signup validation

$(document).ready(function() {

    $('#btn_signup').click(function(e) {
      e.preventDefault();

      var name = $('#signup_name').val();
      var email = $('#signup_email').val();
      var password = $('#signup_pass').val();
  
      $(".error").remove();
        
      if (name.length < 1) {
        $('#signup_name').after('<span class="error text-danger">This field is required</span>');
      }
      
      if (email.length < 1) {
        $('#signup_email').after('<span class="error  text-danger">This field is required</span>');
      } else {
        var regEx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#signup_email').after('<span class="error text-danger">Enter a valid email</span>');
        }
      }
      if (password.length < 8) {
        $('#signup_pass').after('<span class="error text-danger">Password must be at least 8 characters long</span>');
      }
    });
});

//signup validation