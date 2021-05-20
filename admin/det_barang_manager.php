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
			<!-- <li><a href="barang.php"><span class="glyphicon glyphicon-briefcase"></span>  Entry Pengeluaran Barang</a></li> -->
			<li><a href="manager.php"><span class="glyphicon glyphicon-briefcase"></span>  Dashboard Manager</a></li>
			<!-- <li><a href="ssc.php"><span class="glyphicon glyphicon-briefcase"></span>  Dashboard SSC</a></li>   -->
			<li><a href="#"><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Barang</h3>
<a class="btn" href="manager.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>


<?php
$id_brg=mysql_real_escape_string($_GET['id']);


$det=mysql_query("select * from tb_grc where id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Nomor Registrasi</td>
			<td><?php echo $d['no_reg'] ?></td>
		</tr>
		<tr>
			<td>Nama Barang (Name of Goods)</td>
			<td><?php echo $d['nm_barang'] ?></td>
		</tr>
		<tr>
			<td>Ukuran (Size)</td>
			<td><?php echo $d['ukuran'] ?></td>
		</tr>
		<tr>
			<td>Jumlah (Qty)</td>
			<td><?php echo $d['jumlah'] ?></td>
		</tr>
		<tr>
			<td>Keterangan (Remark)</td>
			<td><?php echo $d['ket'] ?></td>
		</tr>
		<tr>
			<td>Alasan Pengeluaran (Reason)</td>
			<td><?php echo $d['alasan'] ?></td>
		</tr>
		<tr>
			<td>Tujuan (Reason)</td>
			<td><?php echo $d['tujuan'] ?></td>
		</tr>
		<tr>
			<td>Rencana Kembali (Plan of Return)</td>
			<td><?php echo $d['rencana_kembali'] ?></td>
		</tr>
		<tr>
			<td>Yang Mengeluarkan (Person Removal)</td>
			<td><?php echo $d['pr'] ?></td>
		</tr>
	</table>
<!-- 	<div class="col-md-12">
		<a style="margin-bottom:10px" href="lap_grc.php" target="_blank" class="btn btn-default pull-center"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
	</div> -->
	<?php 
}
?>
<?php include 'footer.php'; ?>