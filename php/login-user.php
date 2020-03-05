<?php
    require "../config/config.php";
    require "../lib/database.php";
    require "../models/User.php";
    require "../helpers/url_redirect.php";
    require "../helpers/session_helper.php";


    function login(){
        $user = new User();
        $form_mail = filter_var($_POST['login_mail'],FILTER_SANITIZE_EMAIL);
        $form_pass = $_POST['login_pass'];

        $exist = $user->findUserbyEmail($form_mail);


        if ($exist) {
            $db_role = $exist->role;
            $db_password = $exist->password;

            if ($db_role == "admin") {

                echo json_encode([
                    'msgcode'=>'wrong_pass',
                    'msg'=>'Password verify is not working'
                    ]);
                if (password_verify ($form_pass,$db_password)) {
                    $login = $user->userLogin($form_mai,$db_password);
                    if ($login) {
                        $logedIn = createUserSession($login);
                        echo json_encode([
                            'msgcode'=>'success',
                            'msg'=>'profile/index.php'
                            ]);
                    }else {
                        echo json_encode([
                            'msgcode'=>'wrong_pass',
                            'msg'=>'Please enter correct password'
                            ]);
                    }
                }else {
                    echo json_encode([
                        'msgcode'=>'wrong_pass',
                        'msg'=>'Password verify is not working'
                        ]);
                }
            }else {
                # code...
                if (password_verify ($form_pass,$db_password)) {
                    $login = $user->userLogin($form_mai,$db_password);
                    if ($login) {
                        $logedIn = createUserSession($login);
                        echo json_encode([
                            'msgcode'=>'success',
                            'msg'=>'profile/index.php'
                            ]);
                    }else {
                        echo json_encode([
                            'msgcode'=>'wrong_pass',
                            'msg'=>'Please enter correct password'
                            ]);
                    }
                }else {
                    echo json_encode([
                        'msgcode'=>'wrong_pass',
                        'msg'=>'Please enter correct password'
                        ]);
                }
            }
        }else{
            echo json_encode([
                'msgcode'=>'no_email',
                'msg'=>'This email not registerd or wrong email'
                ]);
        }
    }
 
    login();



?>