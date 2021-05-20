
<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>
	<title>SiGoRec : Sistem Informasi GRC</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body>
	<div class="navbar navbar-default">

<nav class="navbar navbar-dark bg-info">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Sistem Informasi Goods Removal Certificates</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<!--<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>-->
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hai, <?php echo $_SESSION['username']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	</div>




	<div class="col-md-2">
		<div class="row">
			<?php 
			$use=$_SESSION['username'];
			$fo=mysql_query("select foto from user where username='$use'");
			while($f=mysql_fetch_array($fo)){
				?>				

				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="foto/<?php echo $f['foto']; ?>">
					</a>
				</div>
				<?php 
			}
			?>		
		</div>

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>			
			<li><a href="halaman_staff.php"><span class="glyphicon glyphicon-briefcase"></span>  Entry Pengeluaran Barang</a></li>
			<!-- <li><a href="manager.php"><span class="glyphicon glyphicon-briefcase"></span>  Dashboard Manager</a></li>
			<li><a href="ssc.php"><span class="glyphicon glyphicon-briefcase"></span>  Dashboard SSC</a></li>   -->
			<li><a href="#"><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">

<!-- UTAMA -->
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Barang</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from tb_grc where id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td>Nomor Registrasi</td>
				<td><input type="text" class="form-control" name="no_reg" value="<?php echo $d['no_reg'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" class="form-control" name="nm_barang" value="<?php echo $d['nm_barang'] ?>"></td>
			</tr>
			<tr>
				<td>ukuran</td>
				<td><input type="text" class="form-control" name="ukuran" value="<?php echo $d['ukuran'] ?>"></td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td><input type="text" class="form-control" name="jumlah" value="<?php echo $d['jumlah'] ?>"></td>
			</tr>
			<tr>
				<td>ket</td>
				<td><input type="text" class="form-control" name="ket" value="<?php echo $d['ket'] ?>"></td>
			</tr>
			<tr>
				<td>alasan</td>
				<td><input type="text" class="form-control" name="alasan" value="<?php echo $d['alasan'] ?>"></td>
			</tr>
			<tr>
				<td>tujuan</td>
				<td><input type="text" class="form-control" name="tujuan" value="<?php echo $d['tujuan'] ?>"></td>
			</tr>
			<tr>
				<td>rencana_kembali</td>
				<td><input type="text" class="form-control" name="rencana_kembali" value="<?php echo $d['rencana_kembali'] ?>"></td>
			</tr>
			<tr>
				<td>pr</td>
				<td><input type="text" class="form-control" name="pr" value="<?php echo $d['pr'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>