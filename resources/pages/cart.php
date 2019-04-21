<?php $path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php'?>


<?php $path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php'?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cart</title>
<meta name="description" content="WhenWing is India's first trusted platform, where you get cheapest, fastest, and assured all Services like Home Services, Transport, Education, Wedding, Showroom, Appliance repair and much more in your location within few hours with verified and experienced providers.">
<meta name="keywords" content="When Wing, Service Provicers,Home Services, Transport, Education, Wedding, Showroom, Appliance repair">
<meta name="theme-color" content="#4885ed" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/logo.png">
<?php include $path['root'].'/includes/style.inc.php';?>

</head>
<body>
<?php include $path['root'].'/resources/templates/header-tmpl.php';?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php include $path['root'].'/resources/templates/get-cart-data-tmpl.php';?>
</div>
<div class="col-md-2"></div>
</div>
<?php include $path['root'].'/resources/templates/footer-tmpl.php';?>
<?php include $path['root'].'/includes/script.inc.php';?>
</body>
</html>
