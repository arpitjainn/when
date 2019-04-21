<?php $path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="theme-color" content="#4885ed" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pundit/Puja</title>
	<link rel="icon" href="/images/logo.png">
	<?php include $path['root'].'includes/style.inc.php';?>
	<link rel="stylesheet" href="/services/styles/css/stylesheet.css" />
	<?php include $path['root'].'/includes/script.inc.php';?>
	<link 
</head>

<body>
<?php 
	$profession = "Pundit/Puja";
	//$speciality1 = array("Bed", "Sofa", "Chair", "Table");
	//$speciality2 = array("Repair", "Make New", "Assemble/DIsassemble");?>	
	<?php include $path['root'].'/services/templates/header-tmpl-1.php';?>
	<div style="width:100%;height:100px;"></div>
	<div class="container" style="border:0px solid #fff;margin:auto;width:100%;">
		<div class="row" style="border:0px solid #000;">
			<div class="col-sm-3 col-md-3 col-lg-3" style="border:0px solid #000;background:#f6f6f6;border-radius:5px;padding-top:20px;padding-bottom:20px;">
				<?php include $path['root'].'services/templates/filter.php';?>
			
			</div>
			
			<div class="col-sm-9 col-md-9 col-lg-9" style="border:1px solid #898989;padding-top:20px;padding-bottom:20px;border-radius:5px;">
				<?php include $path['root'].'services/templates/get-data-1.php';?>
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
</html><?php 
	$path = require '../../config/config-path.php';
	require $path['includes'].'/connect.inc.php';
	
	if (isset($_GET['search'])) {
			$option1=$_GET['option1'];
            $db = new DB();
            $db->query("SELECT `prov_name`, `age`, `addr`, `profession`, `contact`,`workexp`, `prov_record` , `about`, `speciality` , `price` FROM `ww_provider` 
			WHERE (`profession` like '%pundit%' or `about` like '%pundit%' or speciality like '%pundit%') 
			and (`profession` like concat('%','$option1','%') or `speciality` like concat('%','$option1','%') or `about` like concat('%','$option1','%')); ");
            $db->bind(':profession', 'pundit');
            $exeRes = $db->resultset();
			$count = $db->rowCount();
            $db->terminate();
	}
	else if (isset($_GET['apply'])) {
			$budget=$_GET['budget'];
			$location=$_GET['location'];
            $db = new DB();
            $db->query("SELECT `prov_name`, `age`, `addr`, `profession`, `contact`,`workexp`, `prov_record` , `about`, `speciality` , `price` FROM `ww_provider` 
			WHERE (`profession` like '%pundit%' or `about` like '%pundit%' or speciality like '%pundit%') 
			and (`addr` like concat('%','$location','%'))
			and `price`<='$budget'; ");
            $db->bind(':profession', 'pundit');
            $exeRes = $db->resultset();
			$count = $db->rowCount();
            $db->terminate();
	}
    else{
		$db = new DB();
        $db->query("SELECT `prov_name`, `age`, `addr`, `profession`, `contact`, `workexp`, `prov_record`, `about`, `speciality` , `price` FROM `ww_provider` WHERE `profession` like '%pundit%' or `about` like '%pundit%' or speciality like '%pundit%' ; ");
        $db->bind(':profession', 'pundit');
        $exeRes = $db->resultset();
		$count = $db->rowCount();
        $db->terminate();
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
	<title>Pundit/Puja</title>
	<link rel="icon" href="images/logo.png">
	<?php include $path['includes'].'/style.inc.php';?>
	<link rel="stylesheet" href="/services/styles/bootstrap.min.css" />
	<style>
.slidecontainer {
  width: 100%;
  padding-top:15px;
  padding-bottom:25px;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 10px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 10px;
  height: 20px;
  background: #192c5b;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #192c5b;
  cursor: pointer;
}
.outer {
  width: 100%;
  height: 1px;
  margin: auto;
  position: relative;
  overflow: hidden;
  background:grey;
}
.inner {
  position: absolute;
  width:40%;
  height: 100%;
  background: #000;
  left: 30%;
  box-shadow: 0px 0px 30px 20px grey;
}
</style>	
</head>

<body>
<?php 
	$list1 = array("Naamkaran", "Katha","Grehpravesh","Jagran");?>	
	<header>

        <div class="logo-and-name">
            <a href="#">
                <img src="../../images/icons/logo.png" class="site-logo">
                <span class="site-name">WhenWing</span>
            </a>
        </div>
        
	
		<form class="search-div" >
            <select name="option1" class="search-input">
				<option value="">Select Speciality</option>   
				<?php
					foreach($list1 as $item){
				?>
						<option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
				<?php
					}
				?>
			</select>
			
			<input type = "submit" value="Search" name="search" style="background:#f0f0f0;padding:6px;vertical-align:middle;border-radius:5px;width:15%;">
		</form>
		
        <div class="dropdown">
			<div id="nav-icon4">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="dropdown-content">
				<a href="#">Login/Signup</a>
				<a href="#">Cart</a>
				<a href="#">Become a Provider</a>
				<a href="#">About WhenWing</a>
				<a href="#">Contact Us</a>
			</div>
		</div>
		
</header>
	<?php //include $path['templates'].'/navigation-tmpl.php';?>
	
	<div style="width:100%;height:100px;"></div>
	<div class="container" style="border:1px solid #fff;margin:auto;width:95%;">
	<div class="row" style="border:1px solid #fff;">
		<div class="col-lg-3" style="border:0px solid #000;">
			<form>
			<label for="location">Budget : &#8377; </label>
			<span id="demo"></span> 
			<br>
				<div class="slidecontainer">
						<input type="range" name="budget" min="100" max="10000" value="5" class="slider" id="myRange">
				</div>
				<label for="location">Location : </label>
				<input type="text" name="location" style="width:100%; padding:5px;border-radius:5px;margin-top:10px;margin-bottom:10px; ">
				
					<input type="submit" name="apply" value="Apply Now" class="btn btn-primary" style="width:100%;">
			</form>
		</div>
		
		
		
		<div class="col-lg-9" style="border-left:2px solid #192c5b; box-shadow: 1px 1px 30px 1px #e6e6e6;padding-bottom:20px;">
		<h3><b>LIST OF PROVIDERS&nbsp;&nbsp;&nbsp;</b><button class="btn btn-success" style="width:32px;height:32px;border-radius:50%;margin-top:0px;"><?php echo $count;?></button></h3>
		<div class="outer">
		<div class="inner">
		</div>
		</div>
		<?php 
			foreach ($exeRes as $exeResVal){?>
			<div class="col-lg-12" style="border:1px solid #d3d3d3;margin-top:20px;border-radius:5px;">
				<div class="row">
					<h2 class="alert alert-info" style="margin:0px;background:#f0f0f0;border:#fff;">						
						<?php echo $exeResVal['prov_name'];?>
					</h2>
				</div>
				<div style="padding:5px;">
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Age: </b><?php echo $exeResVal['age'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Work Experience: </b><?php echo $exeResVal['workexp'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Address: </b><?php echo $exeResVal['addr'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Record: </b><?php echo $exeResVal['prov_record'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Contact: </b><?php echo $exeResVal['contact'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Speciality: </b><?php echo $exeResVal['speciality'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>About: </b><?php echo $exeResVal['about'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Price: </b><?php echo $exeResVal['price'];?>
					</div>
				</div>
				</div>
				<div class="row">	
					<p class="alert alert-info" style="margin:0px;background:#f0f0f0;padding-top:0px;border:#fff;">						
							<button class="btn btn-primary" style="margin-left:30%;min-width:10%;">Select</button>
							<button class="btn btn-success" style="min-width:10%;">Book Now</button>	
					</p>
				</div>
			</div>
			<?php
			}
			
			?>			
			
			
			
			
			
			
			
			
		</div>
	</div>
	</div>
	
	
	<script>
		var slider = document.getElementById("myRange");

		var output = document.getElementById("demo");

		output.innerHTML = slider.value;


		slider.oninput = function() {
		  output.innerHTML = this.value;
		}
		
	</script>
	<?php include $path['templates'].'/footer-tmpl.php';?>
	<?php include $path['includes'].'/script.inc.php';?>
	
</body>
</html>