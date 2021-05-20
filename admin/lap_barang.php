<?php
include 'config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
$pdf->Image('../logo/logo_inalum.jpg',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PT. INDONESIA ASAHAN ALUMINIUM (PERSERO)',0,'L');
// $pdf->SetX(4); 

$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Smelter Plant Main Office Tanjung Gading, Kec. Sei Suka, Kab. Batu Bara, Sumatera Utara',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : inalum.id email : comdev-isp@inalum.id',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"LAPORAN SURAT KETERANGAN PENGELUARAN BARANG",0,10,'C');


$pdf->SetFont('Arial','B',12);
$pdf->Cell(25.5,0.7,"( Goods Removal Certificate Report)",0,10,'C');

$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Tanggal / Date : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'No Reg', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Barang (Name of Goods)', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Ukuran (Size)', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah (Qty)', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Keterangan (Remarks)', 1, 0, 'C');

$pdf->ln(1);
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from tb_grc_accept");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $lihat['no_reg'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nm_barang'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['ukuran'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['jumlah'], 1, 0,'C');
	$pdf->Cell(7, 0.8, $lihat['ket'],1, 0, 'C');
	$pdf->ln(1);
	$no++;
}


$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(7, 0.8, 'Alasan Pengeluaran / Reason', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Tujuan / Destination', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Rencana Kembali / Plan of Return', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Person Removal', 1, 0, 'C');

$pdf->ln(1);
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from tb_grc_accept");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(7, 0.8, $lihat['alasan'], 1, 0,'C');
	$pdf->Cell(7, 0.8, $lihat['tujuan'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['rencana_kembali'], 1, 0,'C');
	$pdf->Cell(5, 0.8, $lihat['pr'], 1, 0,'C');
	$pdf->ln(1);
	$no++;
}

$pdf->Output("Cetak_SiGorec.pdf","I");

?>

