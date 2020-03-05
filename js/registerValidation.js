$(document).ready(function() {
  var password_reg = new RegExp(
    "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$^&*])(?=.{6,})"
  );
  var password = "";
  var passTwo = "";
  //password one
  $("#user_pass").focusout(function() {
    var password_store = $.trim($("#user_pass").val());
    if (password_store.length == "") {
      $(".password_err").html("Password is required");
      password = "";
    } else if (password_reg.test(password_store)) {
      $(".password_str").html("Strong");
      password = password_store;
    } else {
      $(".password_err").html(
        "Password must be contain at least 6 character, at least one upercase, one lowercase,one number,one symble"
      );
      password = "";
    }
  });

  //confirm password
  $("#user_pass_two").focusout(function() {
    var password_two_store = $.trim($("#user_pass_two").val());
    if (password_two_store.length == "") {
      $(".password_two_err").html("Password is required");
      passTwo = "";
    } else if (password_two_store !== password) {
      $(".password_two_err").html("Password didn't match");
      $("#user_pass_two").val("");
      passTwo = "";
    } else {
      $(".password_two_str").html("Match");
      passTwo = password_two_store;
    }
  }); //confirm password

  //email avaailablity
  $("#user_email").focusout(function() {
    var email_store = $.trim($("#user_email").val());
    if (email_store != "") {
      $.ajax({
        type: "POST",
        url: "php/email-check.php",
        data: { email_check: email_store },
        dataType: "JSON",
        success: function(data) {
          // console.log(data);
          if (data["response"] == "email_success") {
            //email value
            $("#user_email").val("");
            //email notification
            $("#emailHelp")
              .html(data["message"])
              .removeClass("text-muted")
              .addClass("text-danger");
          } else if (data["response"] == "email_fail") {
            $("#emailHelp")
              .html(data["message"])
              .removeClass(["text-danger", "text-muted"])
              .addClass("text-success");
          }
        }
      });
    }
  });
});
