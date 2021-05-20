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

<!-- UTAMA -->

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data GRC Pengeluaran Barang</h3>

<br/>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from tb_grc");
$jum=mysql_result($jumlah_record, 0);

$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-3">
		<tr>
			<td>Pengeluaran Barang Menunggu Persetujuan</td>		
			<td><?php echo $jum; ?></td>
		</tr>

	</table>

	<a style="margin-bottom:10px" href="lap_barang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Laporan GRC</a>

</div>
<form action="cari_act_manager.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari surat di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>


<!-- Fields Table-->
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-2">No Registrasi</th>
		<th class="col-md-3">Nama Barang (Name of Goods)</th>
		<th class="col-md-2">Keterangan (Remark)</th>
		<th class="col-md-1">Details</th>
		<th class="col-md-2">Aksi (Actions)</th>
	</tr>

	<!-- Pencarian -->
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from tb_grc where no_reg like '$cari' or nm_barang like '$cari'");
	}else{
		$brg=mysql_query("select * from tb_grc limit $start, $per_hal");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>

          
 
    
		<!--Actions -->
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['no_reg'] ?></td>
			<td><?php echo $b['nm_barang'] ?></td>
			<td><?php echo $b['ket'] ?></td>
			<td>
				<a href="det_barang_manager.php?id=<?php echo $b['id']; ?>" class="btn btn-info">Detail</a>
			</td>
			<td>
                <a href="grc_manager_accept.php?id=<?php echo $b['id'] ?>" class="btn btn-success">Accept</a>
				<a onclick="if(confirm('Apakah anda yakin tidak menyetujui pengeluaran barang ini ??')){ location.href='grc_manager_reject.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Reject</a>	           
			</td>
		</tr>		
		<?php 
	}
	?>

</table>
<!-- halaman -->
<nav aria-label="...">
  <ul class="pagination">
  	<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>
  </ul>
</nav>


<?php 
include 'footer.php';

?>