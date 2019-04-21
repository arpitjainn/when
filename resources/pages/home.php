<?php $path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php'?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WhenWing</title>
<meta name="description" content="WhenWing is India's first trusted platform, where you get cheapest, fastest, and assured all Services like Home Services, Transport, Education, Wedding, Showroom, Appliance repair and much more in your location within few hours with verified and experienced providers.">
<meta name="keywords" content="When Wing, Service Provicers,Home Services, Transport, Education, Wedding, Showroom, Appliance repair">
<meta name="theme-color" content="#4885ed" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/logo.png">
<?php include 'includes/style.inc.php';?>


<style>

.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 350px;
	margin-top:50px;
	border-radius:20px
}

.avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

</style>
</head>
<body>
<?php include 'resources/templates/header-tmpl.php';?>
<?php include 'resources/templates/navigation-tmpl.php';?>
<?php include 'resources/templates/disp-images-tmpl.php';?>
<?php include 'resources/templates/homepage-services-list-tmpl.php';?>
<?php include 'resources/templates/process-tmpl.php';?>
<?php include 'resources/templates/review-tmpl.php';?>
<?php include 'resources/templates/footer-tmpl.php';?>
<?php include 'includes/script.inc.php';?>
<?php include 'includes/location-modal.inc.php';?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9KpBlssn1rR2RFDgEV6F3F_RZ3t8wU_8" async defer></script>
</body>
</html>
