<?php
require "../config/config.php";
require "../lib/database.php";
require "../models/User.php";
require "../helpers/url_redirect.php";
require "../helpers/session_helper.php";



session_start();


function logout(){
    unset($_SESSION['id']);
    unset($_SESSION['mail']);
    unset($_SESSION['name']);
    unset($_SESSION['role']);
    session_destroy();
    redirect("index.php");
}

logout();


?>