<?php 
include 'config.php';
$id=$_GET['id'];
mysql_query("delete from tb_grc where id='$id'");
header("location:halaman_staff.php");

?>