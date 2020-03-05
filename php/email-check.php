<?php
    require "../config/config.php";
    require "../lib/database.php";
    require "../models/User.php";
    require "../helpers/url_redirect.php";
    require "../helpers/session_helper.php";

    $user = new User();
    $user_mail = filter_var($_POST['email_check'],FILTER_SANITIZE_EMAIL);

    $result = $user->check_email($user_mail);


    if ($result) {
        // echo "Hoise".$result->email;
        echo json_encode(["response"=>"email_success","message"=>"This is email is allready registerd"]);
    }
    else{
        // echo "No results";
        echo json_encode(array('response'=>'email_fail','message'=>'Good to go'));
    }



?>