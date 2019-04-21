<?php
$path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php';
require_once $path['root'] . '/includes/session.inc.php';
    if(isset($_SESSION['providerlogin'])){
        header('Location: /provider-profile');
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="theme-color" content="#4885ed" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WhenWing - Become a Provider</title>
<link rel="icon" href="images/logo.png">
<?php include $_SERVER['DOCUMENT_ROOT'].'includes/style.inc.php';?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'resources/templates/header-tmpl.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'resources/templates/navigation-tmpl.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'resources/templates/become-provider-form-tmpl.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'resources/templates/footer-tmpl.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'includes/script.inc.php';?>
</body>
</html>