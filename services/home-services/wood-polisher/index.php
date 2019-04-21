<?php $path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="theme-color" content="#4885ed" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wood Polisher</title>
	<link rel="icon" href="/images/logo.png">
	<?php include $path['root'].'includes/style.inc.php';?>
	<link rel="stylesheet" href="/services/styles/css/stylesheet.css" />
	<?php include $path['root'].'/includes/script.inc.php';?>
	<link 
</head>

<body>
<?php 
	$profession = "Wood Polisher";
	//$speciality1 = array("Bed", "Sofa", "Chair", "Table");
	//$speciality2 = array("Repair", "Make New", "Assemble/DIsassemble");?>	
	<?php include $path['root'].'/services/templates/header-tmpl-2.php';?>
	<div style="width:100%;height:100px;"></div>
	<div class="container" style="border:0px solid #fff;margin:auto;width:100%;">
		<div class="row" style="border:0px solid #000;">
			<div class="col-sm-3 col-md-3 col-lg-3" style="border:0px solid #000;background:#f6f6f6;border-radius:5px;padding-top:20px;padding-bottom:20px;">
				<?php include $path['root'].'services/templates/filter.php';?>
				
			</div>
			
			<div class="col-sm-9 col-md-9 col-lg-9" style="border:1px solid #898989;padding-top:20px;padding-bottom:20px;border-radius:5px;">
				<?php include $path['root'].'services/templates/get-data-2.php';?>
			</div>
		</div>
	</div>
	<?php include $path['root'].'/resources/templates/footer-tmpl.php';?>
	<?php include $path['root'].'/includes/script.inc.php';?>
	<script>
		var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value;
		slider.oninput = function() {
		  output.innerHTML = this.value;
		}
	</script>
</body>
</html>