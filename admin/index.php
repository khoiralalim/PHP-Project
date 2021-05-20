<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from tb_grc");
?>

<div class="col-md-10">
	<marquee> <h3>Welcome to SiGores (Sistem Informasi Goods Removal Certificates)</h3>	</marquee>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>