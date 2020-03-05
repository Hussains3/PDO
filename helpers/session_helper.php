<?php
session_start();

function msgSuccess($name = '',$massage = '',$class = 'alert alert-success'){
    if (!empty($name)) {
        if (!empty($massage) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            if (!empty($_SESSION[$name.'_class'])) {
                unset($_SESSION[$name.'_class']);
            }
            $_SESSION[$name] =$massage;
            $_SESSION[$name.'_class'] = $class;
        }elseif (empty($massage) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : '';
            echo '<div class="text-center'.$class.'"id = "msg-flash" style="font-size:2rem; padding-left:1rem;">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}
function msgDanger($name = '',$massage = '',$class = 'alert alert-danger'){
    if (!empty($name)) {
        if (!empty($massage) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            if (!empty($_SESSION[$name.'_class'])) {
                unset($_SESSION[$name.'_class']);
            }
            $_SESSION[$name] =$massage;
            $_SESSION[$name.'_class'] = $class;
        }elseif (empty($massage) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : '';
            echo '<div class="text-center'.$class.'"id = "msg-flash" style="font-size:2rem; padding-left:1rem;">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}



 ?>