<?php
    require "../config/config.php";
    require "../lib/database.php";
    require "../models/User.php";
    require "../helpers/url_redirect.php";
    require "../helpers/session_helper.php";

    
    function registration(){

        //instentiate a user model
        $user = new User();
        $user_name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $user_mail = filter_var($_POST['user_email'],FILTER_SANITIZE_EMAIL);
        $user_passwor = $_POST['user_pass'];

        $data =[
            'name'=>$user_name,
            'email'=>$user_mail,
            'password'=>$user_passwor,
            'role'=> 'Subscriber'
        ];

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $user_register = $user->register($data);

        if ($user_register) {
            # code...
            // echo "User registered Successfully";
            msgSuccess('register_success','You are registerd successfully');
            redirect('login.php');
        }else {
            // echo "Something wrong";
            msgDanger('register_fail','Something wrong, Please try again.');

            redirect('registration.php');

        }

    }
    registration();
?>