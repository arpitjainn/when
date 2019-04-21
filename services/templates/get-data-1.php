<?php
	require $path['root'].'/includes/connect.inc.php';
	if(isset($_GET['search'])){
		$speciality = $_GET['speciality1'];
		$db = new DB();
        $db->query("SELECT `prov_id`, `prov_name`, `prov_gender`, `prov_spec_1`, `prov_spec_4`, 
		`prov_workexp`, `prov_price`, `prov_about`, `prov_photo`,`discount`,`rating` FROM `ww_provider` 
		WHERE `prov_service`='$profession' and `prov_spec_1` like concat('%','$speciality','%') ; ");
        $db->bind(':profession', 'carpenter');
        $exeRes = $db->resultset();
		$count = $db->rowCount();
        $db->terminate();
	}
	else if(isset($_GET['apply'])){
		$speciality = $_GET['speciality1'];
		$budget = $_GET['budget'];
		$location = $_GET['location'];
		$provServiceAs = isset($_GET['provideServiceAs']) ? $_GET['provideServiceAs'] : '';
		$db = new DB();
        $db->query("SELECT `prov_id`, `prov_name`, `prov_gender`, `prov_addr`, `prov_spec_1`,
		`prov_spec_4`, `prov_workexp`, `prov_price`, `prov_about`, `prov_photo`,`discount`,`rating` FROM `ww_provider` 
		WHERE `prov_service`='$profession' and `prov_price`<='$budget' and `prov_addr` like concat('%','$location','%')
		and `prov_spec_1` like concat('%','$speciality','%') and `prov_spec_4` like concat('%','$provideServiceAs','%'); ");
        $db->bind(':profession', 'carpenter');
        $exeRes = $db->resultset();
		$count = $db->rowCount();
        $db->terminate();
	}
	else{
		$db = new DB();
        $db->query("SELECT `prov_id`, `prov_name`, `prov_gender`, `prov_spec_1`, `prov_spec_4`, 
		`prov_workexp`, `prov_price`, `prov_about`, `prov_photo`,`discount`,`rating` FROM `ww_provider` WHERE `prov_service`='$profession' ; ");
        $db->bind(':profession', 'carpenter');
        $exeRes = $db->resultset();
		$count = $db->rowCount();
        $db->terminate();
	}
?>
<h3><b>LIST OF PROVIDERS&nbsp;&nbsp;&nbsp;</b><button class="btn btn-success" style="width:32px;height:32px;border-radius:50%;margin-top:0px;"><?php echo $count;?></button></h3>
		<div class="outer">
		<div class="inner">
		</div>
		</div>
		<?php 
			foreach ($exeRes as $exeResVal){?>
			<div class="col-lg-12" style="border:1px solid #d3d3d3;margin-top:20px;border-radius:5px;">
				<div class="row">
					<h2 class="alert alert-info" style="margin:0px;background:#f0f0f0;border:#fff;width:100%;">						
						<?php echo $exeResVal['prov_name'];?>
					</h2>
				</div>
				<div style="padding:5px;">
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Gender: </b><?php echo $exeResVal['prov_gender'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Speciality: </b><?php echo $exeResVal['prov_spec_1'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Provide Service As: </b><?php echo $exeResVal['prov_spec_4'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Base Price: </b> &#8377; <?php echo $exeResVal['prov_price'];?>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Discount: </b><?php echo $exeResVal['discount'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Rating: </b><?php echo $exeResVal['rating'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Work Experience: </b><?php echo $exeResVal['prov_workexp'];?>
					</div>
					
				</div>
				<div class="row">
					<div class="col-lg-12" style="border:1px solid #fff;">
						<b>About: </b><?php echo $exeResVal['prov_about'];?>
					</div>
				</div>
				</div>
				<div class="row">	
					<p class="alert alert-info" style="margin:0px;background:#f0f0f0;padding-top:0px;padding-bottom:0px;border:#fff;width:100%;">						
							<a href="/resources/pages/add-order.php?prov_id=<?php echo $exeResVal['prov_id'];?>">
							<button class="btn btn-primary" style="min-width:10%;max-width:20%;margin-left:20%;">Select</button></a>
							<button class="btn btn-success" style="min-width:10%;max-width:20%;margin-left:20%;">Book Now</button>	
					</p>
				</div>
			</div>
			<?php
			}
			
			?>			
			
			
			
			
			
			
			
			
		</div>
	</div>
	</div>