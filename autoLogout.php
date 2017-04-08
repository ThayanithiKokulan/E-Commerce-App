<?php
$t = time();
$t0 = $_SESSION['c_userid'];
$diff = $t - $t0;

if ($diff > 1500 || !isset($t0)){          
    unset($_SESSION['basket']);
    unset($_SESSION['c_userid']);
    unset($_SESSION['c_userfName']);
    unset($_SESSION['c_userlName']);
    session_destroy();
    echo "<script>alert('Time Out Please Login Again')</script>";
}
    else
    {
        $_SESSION['c_userid'] = time();
    }
?>