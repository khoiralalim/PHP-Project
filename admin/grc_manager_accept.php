<?php
    include('functions.php');
    $id = $_GET['id'];
    $query = "select * from `tb_grc` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $no_reg = $row['no_reg'];
            $nm_barang = $row['nm_barang'];
            $ukuran = $row['ukuran'];
            $jumlah = $row['jumlah'];
            $ket = $row['ket'];
            $alasan = $row['alasan'];
            $tujuan = $row['tujuan'];
            $rencana_kembali = $row['rencana_kembali'];
            $pr = $row['pr'];
            $query = "INSERT INTO `tb_grc_accept` (`id`, `no_reg`, `nm_barang`, `ukuran`, `jumlah`, `ket`, `alasan`, `tujuan`, `rencana_kembali`, `pr`) VALUES ('', '$no_reg', '$nm_barang', '$ukuran', '$jumlah', '$ket', '$alasan', '$tujuan', '$rencana_kembali', '$pr');";
        }
        $query .= "DELETE FROM `tb_grc` WHERE `tb_grc`.`id` = '$id';";


        if(performQuery($query)){
            echo "Account has been accepted.";
            header("location:manager.php");
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
       echo "Error occured.";
    }

?>

