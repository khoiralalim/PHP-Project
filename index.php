<!DOCTYPE html>
<html>
<head>
	<title>SiGores (Goods Removal Certificate)</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	<?php include 'admin/config.php'; ?>
	<style type="text/css">
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
</head>
<body>	

	<div class="container">

		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>

		<div class="panel panel-default">
			<form action="cek_login.php" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">

					<center><h3>SiGorec <br>(Sistem Informasi GRC)</h3></center>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="username" class="form-control" placeholder="Username .." required="required">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="password" class="form-control" placeholder="Password .." required="required">
					</div>
					<center>
					<div class="input-group">
								
						<input type="submit" class="btn btn-primary" value="LOGIN">
						</center>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>