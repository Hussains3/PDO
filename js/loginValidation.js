$(document).ready(function() {
  $("#login_submit").click(function(e) {
    e.preventDefault();
    // alert("loaded");
    var log_mail = $.trim($("#log_mail").val());
    var log_pass = $.trim($("#log_pass").val());

    //if email empty
    if (log_mail.length == "") {
      $(".mail_str").html("Email is required");
    } else {
      $(".mail_str").html("");
    }
    //if pass is empty
    if (log_pass.length == "") {
      $(".pass_str").html("Password is required");
    } else {
      $(".pass_str").html("");
    }

    //if mail and pass are not empty
    if (log_mail.length != "" && log_pass.length != "") {
      // alert("Both are not empty");

      $.ajax({
        type: "POST",
        url: "php/login-user.php",
        data: { login_mail: log_mail, login_pass: log_pass },
        //dataType: "JSON",
        success: function(data) {
          // $(".mail_str").html(data["msg"]);
          if (data["msgcode"] == "success") {
            console.log(data["msg"]);
          } else if (data["msgcode"] == "wrong_pass") {
            console.log(data["msg"]);
          }
        }
      });
    }
  });
});
