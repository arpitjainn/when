<?php
	require $path['root'].'/includes/connect.inc.php';
	require_once $path['root'] . '/includes/session.inc.php';
	$customer_id = 15;
        if (isset($customer_id)) {
            $db = new DB();
            $db->query("SELECT ww_provider.prov_name, ww_provider.prov_gender, ww_provider.prov_spec_1, 
			ww_provider.prov_spec_2, ww_provider.prov_spec_3, ww_provider.prov_spec_4, ww_provider.prov_workexp,
			ww_provider.prov_price, ww_provider.prov_about, ww_provider.prov_photo, ww_provider.rating, ww_provider.discount from ww_customer_order join ww_provider
			on ww_customer_order.provider_id = ww_provider.prov_id WHERE customer_id='$customer_id'; ");
        
            $db->bind(':customer_id', $customer_id);
            $exeRes = $db->resultset();
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
						<b>Best For: </b><?php echo $exeResVal['prov_spec_2'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Provide Service As: </b><?php echo $exeResVal['prov_spec_4'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Extra FIeld: </b><?php echo $exeResVal['prov_spec_3'];?>
					</div>
					<div class="col-lg-6" style="border:1px solid #fff;">
						<b>Base Price: </b><?php echo $exeResVal['prov_price'];?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12" style="border:1px solid #fff;">
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
							<!--a href="cart.php">
							<button class="btn btn-primary" style="min-width:10%;max-width:20%;margin-left:20%;">Select</button></a-->
							<button class="btn btn-success" style="min-width:10%;max-width:20%;margin-left:40%;">Book Now</button>	
					</p>
				</div>
			</div>
			<?php
			}
			
			?>		
		</div>
	</div>
	</div>