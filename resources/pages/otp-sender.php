<?php
$path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';
require_once $path['root'] . '/includes/session.inc.php';
$otpVal = mt_rand(100000, 999999);
$_SESSION['ww_otp'] = $otpVal;
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    if (isset($_POST["mobNum"])) {
        echo $otpVal;
    }else{
        echo 'Something Went Wrong.';
    }
}
