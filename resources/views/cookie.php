<?php
    $user = "username";
    $value = "Momina";

    setcookie($user, $value, time() + (86400));

    if (isset($_COOKIE[$user])) {
        $value = $_COOKIE[$user];
    
        echo $value;
    } else {
        echo 'Cookie not set.';
    }
    
?>
