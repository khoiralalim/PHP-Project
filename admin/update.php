<?php 
include 'config.php';
$id=$_POST['id'];
$no_reg=$_POST['no_reg'];
$nm_barang=$_POST['nm_barang'];
$ukuran=$_POST['ukuran'];
$jumlah=$_POST['jumlah'];
$ket=$_POST['ket'];
$alasan=$_POST['alasan'];
$tujuan=$_POST['tujuan'];
$rencana_kembali=$_POST['rencana_kembali'];
$pr=$_POST['pr'];

mysql_query("update tb_grc set no_reg='$no_reg', nm_barang='$nm_barang', ukuran='$ukuran', jumlah='$jumlah', ket='$ket', alasan='$alasan', tujuan='$tujuan', rencana_kembali='$rencana_kembali', pr='$pr' where id='$id'");
header("location:halaman_staff.php");

?>