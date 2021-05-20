<?php 
include 'config.php';
$no_reg=$_POST['no_reg'];
$nm_barang=$_POST['nm_barang'];
$ukuran=$_POST['ukuran'];
$jumlah=$_POST['jumlah'];
$ket=$_POST['ket'];
$alasan=$_POST['alasan'];
$tujuan=$_POST['tujuan'];
$rencana_kembali=$_POST['rencana_kembali'];
$pr=$_POST['pr'];

mysql_query("insert into tb_grc values('','$no_reg','$nm_barang','$ukuran','$jumlah','$ket','$alasan','$tujuan','$rencana_kembali','$pr')");
header("location:halaman_staff.php");

 ?>