<?php 
$path = require $_SERVER['DOCUMENT_ROOT'].'/ww-admin/config/config-path.php';
include_once $path['root'].'/ww-admin/includes/session.inc.php';
include_once $path['root'].'/ww-admin/includes/connect.inc.php';
if(!isset($_SESSION['user_id']))
	{
		header('Location:../ww-admin/login');
	}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WhenWing | Orders</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="theme-color" content="#4885ed" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/logo.png">
  <?php include $path['admin'].'/includes/style-wb-admin.inc.php';?>
  <link rel="stylesheet" href="/ww-admin/styles/css/dataTables.bootstrap.min.css">
</head>

<body class="hold-transition skin-black sidebar-mini">
	<div class="wrapper">

		<?php include $path['admin'].'/resources/templates/header-tmpl.php';?>
		<?php include $path['admin'].'/resources/templates/left-sidebar-tmpl.php';?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Orders
					<small><?php echo $post_get_v2; ?> Orders</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<a href="/ww-admin">
							<i class="fa fa-dashboard"></i> Home</a>
					</li>
					<li class="active">Orders</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Order Table</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Order id</th>
											<th>Customer id</th>
											<th>Provider id</th>
											<th>Type 1</th>
											<th>Type 2</th>
											<th>Type 3</th>
											<th>Type 4</th>
											<th>Order Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php include $path['admin'].'/handlers/formhandle/orders/show-order.php';?>									
									</tbody>
									<tfoot>
										<tr>
										<th>Order id</th>
											<th>Customer id</th>
											<th>Provider id</th>
											<th>Order Name</th>
											<th>Order Date</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
            <!-- /.box -->
            
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->




			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<?php include $path['admin'].'/resources/templates/footer-tmpl.php';?>
	</div>
	<!-- ./wrapper -->
	<?php include $path['admin'].'/includes/script-wb-admin.inc.php';?>
	<!-- page script -->

	<!-- DataTables -->
	<script src="/ww-admin/scripts/jquery.dataTables.min.js"></script>
	<script src="/ww-admin/scripts/dataTables.bootstrap.min.js"></script>

	<script>
		$(function() {
			$('#example2').DataTable({
				'paging': true,
				'lengthChange': false,
				'searching': true,
				'ordering': true,
				'info': true,
				'autoWidth': false
			})
		})
	</script>

</body>

</html>